<style>
div.list-group-item:hover {
	color:#333;
	background-color:#f5f5f5
}
.list-group-item > a > i {
    margin-right: 7px;
}
.img-lg-custom {
	width:200px !important;
	height:auto !important;
}
.label-rating {
	position:absolute;
}
.panel-chosen {
	background-color:#fffdb5;
}
</style>
<!-- Page header -->
<!-- <div class="page-header">
    <div class="page-header-content">
        <form class="wizard"><div class="steps clearfix"><ul role="tablist">
        	<li role="tab" class="first current" aria-disabled="false" aria-selected="true">
            	<a id="steps-uid-0-t-0" href="javascript:;" aria-controls="steps-uid-0-p-0">
                	<span class="current-info audible">current step: </span>
                    <span class="number">1</span> Pilih Destinasi Wisata
            	</a>
            </li>
            <li role="tab" class="disabled" aria-disabled="true">
            	<a id="steps-uid-0-t-1" href="javascript:;" aria-controls="steps-uid-0-p-1"><span class="number">2</span> Pilih Hotel dan Preferensi</a>
            </li>
            <li role="tab" class="disabled" aria-disabled="true">
            	<a id="steps-uid-0-t-2" href="javascript:;" aria-controls="steps-uid-0-p-2"><span class="number">3</span> Hasil Rekomendasi</a>
            </li>
    	</ul></div></form>
    </div>
</div> -->
<!-- /page header -->

<div style="width:100%; height:50px; padding:5px; position:fixed; bottom:0; background-color:#fff; z-index:100; text-align:center; display:none" id="recbutton">
	<button type="button" class="genric-btn primary radius" onClick="recommendation()">
		<i class="icon-search4 text-size-base position-left"></i> Rekomendasikan | <span id="reccount">0</span> Destinasi Wisata Terpilih
	</button>
</div>

<!-- Page container -->
<div class="page-container">

<!-- Page content -->
<div class="page-content">
<div class="row">
    <!-- Main sidebar -->
    <div class="col-md-3 col-xs-12">
        <!-- Sidebar search -->
        <div class="panel panel-white">
            <div class="panel-heading">
                <div class="panel-title text-semibold">
                    <i class="icon-search4 text-size-base position-left"></i> Destinasi Wisata Terpilih
                </div>
            </div>

            <div class="list-group no-border" id="rec-list">

            </div>

            <div class="panel-body">
                <button type="button" class="genric-btn primary btn-block" onClick="recommendation()">
                    <i class="icon-search4 text-size-base position-left"></i> Rekomendasikan
                </button>
            </div>
        </div>
        <!-- /sidebar search -->


        <!-- Location selection -->
        <div class="panel panel-white">
            <div class="panel-heading">
                <div class="panel-title text-semibold">
                    <i class="icon-pin-alt position-left"></i> Kategori Destinasi Wisata
                </div>
            </div>

            <form action="#">
                <div class="panel-body">
                    <div class="form-group">
                        <!--<div class="checkbox no-margin-top">
                            <label>
                                <input type="checkbox" class="styled">
                                Developer
                                <span class="text-muted text-size-small">&nbsp;(38)</span>
                            </label>
                        </div>-->
                        <?php foreach($cats as $cat) { ?>
						
									<div class="switch-wrap d-flex">
										<div class="primary-checkbox">
											<input type="checkbox" class ="styled" id="<?= $cat->cat_id ?>">
											<label for="<?= $cat->cat_id ?>"></label>
										</div>
										<p align="left">&nbsp;&nbsp;<?= $cat->cat_name ?> <b>(<?= $cat->cat_count ?>)</b></p>
										
									</div>
                        <?php } ?>
                    </div>
                </div>
            </form>
        </div>
        <!-- /location selection -->
    </div>

    <!-- Main content -->
    <div class="col-md-9 col-xs-12">
        <div id="destination-list"></div>
    </div>
    <!-- /main content -->
</div>
<?php $this->load->view('frontend/tpl_rec_footer'); ?>

<script type="text/javascript" src="assets/backend/js/plugins/forms/tags/tagsinput.min.js"></script>
<script type="text/javascript" src="assets/backend/js/plugins/forms/tags/tokenfield.min.js"></script>
<script type="text/javascript" src="assets/backend/js/plugins/ui/prism.min.js"></script>
<script type="text/javascript" src="assets/backend/js/plugins/forms/inputs/typeahead/typeahead.bundle.min.js"></script>
<script type="text/javascript" src="assets/backend/js/plugins/forms/styling/uniform.min.js"></script>

<script>
$(function() {
	//
    // Primary
    //
	window.onscroll = function() {scrollFunction()};
	function scrollFunction()
	{
		var h = $(window).height();
		if (document.body.scrollTop > h || document.documentElement.scrollTop > h) {
			document.getElementById("recbutton").style.display = "block";
		} else {
			document.getElementById("recbutton").style.display = "none";
		}
	}

    // Add class on init
    $('.tokenfield-primary').on('tokenfield:initialize', function (e) {
        $(this).parent().find('.token').addClass('bg-primary')
    });

    // Initialize plugin
    $('.tokenfield-primary').tokenfield();

    // Add class when token is created
    $('.tokenfield-primary').on('tokenfield:createdtoken', function (e) {
        $(e.relatedTarget).addClass('bg-primary')
    });

	get_destination('');

	$(".styled, .multiselect-container input").uniform({
        radioClass: 'choice'
    });

	$('.styled').change(function () {
		var txt = '';
		$('.styled:checked').each(function() {
			txt += $(this).attr('id')+'|';
		});
		txt = txt.slice(0,-1);

		get_destination(txt);
	});
});

function get_destination(id, page='1')
{
	$.ajax({
		url:'recommender/get_destination',
		global:false,
		async:false,
		type:'post',
		data: ({ id : id, page : page }),
		success: function(e) {
			$('#destination-list').html(e);
		},
		error : function() {
			alert('<?= $this->config->item('alert_error') ?>');
		},
		beforeSend : function() {
			$('#loading-img').show();
		},
		complete : function() {
			$('#loading-img').hide();
		}
	});
}



function add_rec_list(id, txt)
{
	if($('#rec-list-'+id).length <= 0)
	{
		var html = '<div class="list-group-item" id="rec-list-'+id+'" data-dest="'+id+'"><a href="javascript:;" onClick="remove_rec_list(\'rec-list-'+id+'\')"><i class="icon-close2 text-danger"></i></a> '+txt+'</div>';
		$('#rec-list').append(html);

		change_color();
		recbutton();
	}
}



function remove_rec_list(id)
{
	$('#'+id).remove();

	change_color();
	recbutton();
}

function recommendation()
{
	if($('.list-group-item').length <= 1)
	{
		alert("Silahkan pilih destinasi wisata tujuan terlebih dahulu\n(Minimal 2 destinasi wisata)");
		return false;
	}

	var url = '';
	$('.list-group-item').each(function(i, obj) {
		url += $(this).data('dest')+'-';
	});
	url = url.slice(0,-1);

	window.location.href = 'recommender/step2?dest='+url;
}

function change_color()
{
	$('.label-rec').removeClass('primary-border');
	$('.label-rec').addClass('primary');
	$('.panel-rec').removeClass('panel-chosen');

	$('.list-group-item').each(function(i, obj) {
		url = $(this).data('dest');

		$('#span-chosen-'+url).removeClass('primary');
		$('#span-chosen-'+url).addClass('primary-border');
		$('#li-panel-'+url).addClass('panel-chosen');
	});
}

function recbutton()
{
	var count = $('.list-group-item').length;

	$('#reccount').html(count);
}
</script>
