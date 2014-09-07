 <header>
    <div class="bio-header clearfix">
        <div class="col_half first">
            <?php if(of_get_option('veecard_home_name') != '') { ?><h1 class="bio-title"><?php echo of_get_option('veecard_home_name') ?></h1><?php } ?>
            <?php if(of_get_option('veecard_home_address') != '') { ?><span class="bio-location"><?php echo of_get_option('veecard_home_address') ?></span><?php } ?>
        </div>

        <div class="col_half clearfix">
            
            <div class="bio-image">
				<img src="http://zi-wang.com/myfiles/bio_zi.jpg" alt="Hi" />
            </div>
            
            <div class="bio-info">
                <?php if(of_get_option('veecard_home_phone') == '') { ?><span class="bio-phone"><?php echo of_get_option('veecard_home_phone') ?></span><?php } ?>
                <?php if(of_get_option('veecard_home_email') == '') { ?><span class="bio-email"><?php echo of_get_option('veecard_home_email') ?></span><?php } ?>
            </div>

        </div>
    </div>
</header>