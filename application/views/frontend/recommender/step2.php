<style>
div.list-group-item:hover {
	color:#333;
	background-color:#f5f5f5
}
.list-group-item > a > i {
    margin-right: 7px;
}

.slidecontainer {
  width: 100%;
}

.slider {
  -webkit-appearance: none;
  width: 100%;
  height: 2px;
  border-radius: 1px;
  background: #f3f3f3;
  outline: none;
  opacity: 0.7;
  -webkit-transition: .2s;
  transition: opacity .2s;
}

.slider:hover {
  opacity: 1;
}

.slider::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 20px;
  height: 20px;
  border-radius: 50%;
  background: #f09359;
  cursor: pointer;
}

.slider::-moz-range-thumb {
  width: 20px;
  height: 20px;
  border-radius: 50%;
  background: #f09359;
  cursor: pointer;
}


</style>
<!-- Page container -->
<div class="page-container">

<!-- Page content -->
<div class="page-content">
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-white">
                <div class="panel-heading">
                    <h6 class="panel-title">Destinasi Wisata Terpilih</h6>
                </div>

                <div class="panel-body" style="min-height:316px">
                    <div class="list-group no-border" id="rec-list">
                    	<?php foreach($locs as $loc) { ?>
                        <div class="list-group-item" id="rec-list-<?= $loc->post_id ?>" data-dest="<?= $loc->post_id ?>">
                        	<a href="javascript:;" onClick="remove_rec_list('rec-list-<?= $loc->post_id ?>')">
                            	<i class="icon-close2 text-danger"></i>
                            </a>
												<?= $loc->post_title_id ?>

												<!-- <?= form_dropdown('visitingTime', $visitingTime, '', 'class="form-control select2" id="visitingTime" required'); ?> -->
                        </div>
                        <?php } ?>
                    </div>
                </div>

                <div class="panel-footer no-padding">
                    <a href="recommender" class="btn btn-default btn-block no-border">Pilih Ulang Destinasi Wisata</a>
                </div>
            </div>
        </div>

		<div class="col-md-4">
            <div class="panel panel-white">
                <div class="panel-heading">
                    <h6 class="panel-title">Pilih Hotel dan Algoritma</h6>
                </div>

                <div class="panel-body" style="min-height:350px">
                    <div class="form-group">
                        <label>Pilih salah satu hotel / penginapan sebagai titik awal dan akhir dari perjalanan wisata</label>
                        <?= form_dropdown('hotel', $hotel, '', 'class="form-control select2" id="hotel" required'); ?>
                    </div>
                    <div class="form-group">
                        <label>Algoritma Rekomendasi</label>
                        <?= form_dropdown('algorithm', $algorithm, '', 'class="form-control select2" id="algorithm" required'); ?>
                    </div>
										<!-- <div class="form-group">
												<label> Waktu kunjungan tiap wisata </label>
												<?= form_dropdown('visitingTime', $visitingTime, '', 'class="form-control select2" id="visitingTime" required'); ?>
										</div> -->
								</div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="panel panel-white">
                <div class="panel-heading">
                    <h6 class="panel-title">Preferensi</h6>
                </div>

                <div class="panel-body" style="min-height:350px">
                    <p><strong>Rute Kunjungan Wisata Yang Bagaimana, Yang Anda Inginkan ? <em>(Masukkan Bobot Antara 0 - 1)</em></strong></p>
                    <div class="form-group">
                        <label>Ingin Mengunjungi Destinasi Wisata Sebanyak Mungkin</label>
                        <input type="range" min="0" max="1" step="0.1" value="1" class="slider form-control" id="visit">
                        <p>Value : <b><span id="visitval"></span></b></p>
                    </div>

                    <div class="form-group">
                        <label>Rute Wisata yang Meminimalkan Biaya</label>
                        <input type="range" min="0" max="1" step="0.1" value="1" class="slider form-control" id="price">
                        <p>Value : <b><span id="priceval"></span></b></p>
                    </div>

                    <div class="form-group">
                        <label>Ingin Destinasi Wisata Yang Populer</label>
                        <input type="range" min="0" max="1" step="0.1" value="1" class="slider form-control" id="rating">
                        <p>Value : <b><span id="ratingval"></span></b></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
    	<div class="col-md-12">
        	<div class="panel panel-flat panel-body text-center">
            	<button type="button" class="genric-btn primary" onClick="recommendation_step2()">
                    <i class="icon-search4 text-size-base position-left"></i> Rekomendasikan
                </button>
            </div>
        </div>
    </div>

<?php $this->load->view('frontend/tpl_rec_footer'); ?>

<script type="text/javascript" src="assets/backend/js/plugins/sliders/ion_rangeslider.min.js"></script>
	<script type="text/javascript" src="assets/backend/js/plugins/forms/selects/select2.min.js"></script>


<script>
var slider = document.getElementById("visit");
var output = document.getElementById("visitval");
output.innerHTML = slider.value;

slider.oninput = function() {
    output.innerHTML = this.value;
}
</script>

<script>
var slider1 = document.getElementById("price");
var output1 = document.getElementById("priceval");
output1.innerHTML = slider1.value;

slider1.oninput = function() {
    output1.innerHTML = this.value;
}
</script>

<script>
var slider2 = document.getElementById("rating");
var output2 = document.getElementById("ratingval");
output2.innerHTML = slider2.value;

slider2.oninput = function() {
    output2.innerHTML = this.value;
}
</script>


<script>
$(function() {
	$(".ion-input-slider").ionRangeSlider({
        min: 0,
        max: 1,
        from: 1,
		step: 0.1
    });

	$('select.select2').select2();
});


// function wakunwis($id){
// 	$.ajax({
// 		url:'recomender/waktu_kunjungan' +id,
// 		type: "GET"
// 		dataType: "JSON"
// 		success: function(data){
// 			var visiting = $('#visitingTime').val();
// 		},
// 		error : function(){
// 			alert('<?= $this->config->item('alert_error') ?>');
// 		}
// 	})
// }

function get_destination(id)
{
	$.ajax({
		url:'recommender/get_destination',
		global:false,
		async:false,
		type:'post',
		data: ({ id : id }),
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
	var html = '<div class="list-group-item" id="rec-list-'+id+'"><a href="javascript:;" onClick="remove_rec_list(\'rec-list-'+id+'\')"><i class="icon-close2 text-danger"></i></a> '+txt+'</div>';
	$('#rec-list').append(html);
}

function remove_rec_list(id)
{
	$('#'+id).remove();
}


function recommendation_step2()
{
	if($('.list-group-item').length <= 1)
	{
		alert("Silahkan pilih destinasi wisata tujuan terlebih dahulu\n(Minimal 2 destinasi wisata)");
		return false;
	}

	if($('#hotel').val() == '')
	{
		alert("Silahkan pilih hotel terlebih dahulu");
		return false;
	}
	var dest = '';
	$('.list-group-item').each(function(i, obj) {
		dest += $(this).data('dest')+'-';
	});
	dest = dest.slice(0,-1);

	var kunjungan = $('#kunjungan').val();
	var hotel = $('#hotel').val();
	var visit = $('#visit').val();
	var price = $('#price').val();
	var rating = $('#rating').val();
	var algorithm = $('#algorithm').val();
	// var visitingTime = $('#visitingTime').val();

	// window.location.href = '<?= base_url() ?>recommender/result?dest='+dest+'&hotel='+hotel+'&visit='+visit+'&price='+price+'&rating='+rating+'&algorithm='+algorithm+'&visitingTime='+visitingTime;
	window.location.href = '<?= base_url() ?>recommender/result?dest='+dest+'&hotel='+hotel+'&visit='+visit+'&price='+price+'&rating='+rating+'&algorithm='+algorithm;
}
</script>
