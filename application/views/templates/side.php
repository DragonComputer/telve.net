<div class="span3" style="float:right;margin-top:11px;">
    <div>
        <form action="<?php echo base_url("arama");?>" method="get" accept-charset="utf-8" style="margin:0;">
            <?php if ( isset($search_query) ) { ?>
                <?php if ($search_total_rows > 0) { ?>
                    <input name="q" type="text" class="span12" placeholder="Ara" style="margin-bottom:5px;color:green;" value="<?php echo $search_query; ?>">
                <?php } else { ?>
                    <input name="q" type="text" class="span12" placeholder="Ara" style="margin-bottom:5px;color:red;" value="<?php echo $search_query; ?>">
                <?php } ?>
            <?php } else { ?>
                <input name="q" type="text" class="span12" placeholder="Ara" style="margin-bottom:5px;">
            <?php } ?>
        </form>
    </div>

    <?php echo $login_form;?>

    <a href="<?php echo base_url('').'t/'.$chosen_topic['topic'].'/';?>">
        <div class="topic-suggestion" style="background-image: url('<?php echo $chosen_topic['header_image'];?>')">
            <span class="topic-title whiteGlow">/t/<?php echo $chosen_topic['topic'];?></span>
        </div>
    </a>

    <a class="btn btn-block btn-info login-required btn-blue" href="<?php echo base_url("gonder");?>">Yeni bir bağlantı gönder</a>

    <a class="btn btn-block btn-info login-required btn-blue" href="<?php echo base_url("gonder")."?metin=true";?>">Yeni bir metin gönder</a>
</div>
</div>
</div>
