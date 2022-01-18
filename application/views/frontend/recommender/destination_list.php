<!-- Cards layout -->
<div class="panel panel-white">
    <div class="panel-heading">
        <h6 class="panel-title text-semibold">Destinasi Wisata</h6>
    </div>

    <ul class="media-list">
        <?php foreach($data as $row) { ?>
        <li class="media panel-body panel-rec stack-media-on-mobile" id="li-panel-<?= $row->post_id ?>">
            <div class="media-left">
                <a href="<?= y_url_read($row->post_id, $row->post_url) ?>" target="_blank">
                    <span class="label bg-pink label-rating">
                    	<i class="icon-heart6 text-size-base text-white position-left" style="margin-right:4px"></i> <?= $row->post_rating ?>
                    </span>
                    <img src="<?= y_image($row->post_img, 'thumbnail') ?>" class="img-rounded img-lg img-lg-custom" alt="<?= $row->post_title_id ?>">
                </a>
            </div>
        
            <div class="media-body">
                <h6 class="media-heading text-semibold">
                    <a style="color:black;" href="<?= y_url_read($row->post_id, $row->post_url) ?>" target="_blank"><?= $row->post_title_id ?></a>
                </h6>
        
                <ul class="list-inline list-inline-separate text-muted mb-10" style="list-style-type:none;">
                	<?php if(!empty($row->cats)) { $cats = explode(';', $row->cats); foreach($cats as $cat) { if(isset($info[$cat])) { $c = $info[$cat]; ?>
                    <li><a href="<?= y_url_cat($c->cat_id, $c->cat_url) ?>" target="_blank" style="color:#454545;background-color:none;" class="btn default-border radius"><?= $c->cat_name ?></a></li>
                    <?php } } } ?>
                </ul>
        
                <p class="sample-text" align="justify">
					<?= '<b><i class="fa fa-thumb-tack" aria-hidden="true"></i>&nbsp;'.$row->post_address.'<br> </b>' ?>
					<?= !empty($row->post_excerpt_id) ? y_ellipsis($row->post_excerpt_id, 300) : y_ellipsis($row->post_content_id, 300) ?> [...]
                </p>
            </div>
        
            <div class="media-right text-nowrap">
                <a href="javascript:;" onClick="add_rec_list('<?= $row->post_id ?>', '<?= str_replace("'","\'",$row->post_title_id) ?>')">
                	<span class="label label-rec genric-btn primary radius" id="span-chosen-<?= $row->post_id ?>">Pilih</span>
                </a>
            </div>
        </li>
        <?php } ?>
    </ul>
</div>
<!-- /cards layout -->

<?php $nums = ceil($total / $limit); if($nums > 1) { ?>
<!-- Pagination -->
<nav style="margin-top:-50px;" class="blog-pagination justify-content-center d-flex">
    <ul class="pagination">
        <?php if($page == 1) { ?>
        <li class="disabled"><a href="javascript:;"><span aria-hidden="true"><span class="lnr lnr-chevron-left"></span></span></a></li>
        <?php } else { ?>
        <li><a href="javascript:get_destination('<?= $id ?>','<?= $page-1 ?>')"><span aria-hidden="true"><span class="lnr lnr-chevron-left"></span></span></a></li>        
        <?php } ?>
        
		<?php for($num = 1; $num <= $nums; $num++) { ?>        
        <li <?= $num == $page ? 'class="page-item"' : 'class="page-item"' ?>><a style="<?= $num == $page ? 'background-color:#f8b600;color:white;' : ''?>" href="<?= $num == $page ? 'javascript:;' : "javascript:get_destination('$id','$num')" ?>"><?= $num ?></a></li>
        <?php } ?>
        
        <?php if($page == $nums) { ?>
        <li class="disabled"><a href="javascript:;"><span aria-hidden="true"><span class="lnr lnr-chevron-right"></span></span></a></li>
        <?php } else { ?>
        <li><a href="javascript:get_destination('<?= $id ?>','<?= $page+1 ?>')"><span aria-hidden="true"><span class="lnr lnr-chevron-right"></span></span></a></li>      
        <?php } ?>
        
    </ul>
</nav>
<!-- /pagination -->
<?php } ?>