<figure class="<?=$this->rootElementClass?> kwfUp-kwcImage" style="<?=$this->style;?>">
<?php if ($this->baseUrl) { ?>
    <?=$this->component($this->linkTag)?>
    <div class="<?=$this->containerClass?>" style="padding-bottom:<?=$this->aspectRatio?>%;"
            data-width-steps="<?= json_encode($this->widthSteps) ?>"
            data-src="<?=$this->baseUrl;?>">
        <noscript>
            <?=$this->image($this->image, $this->altText, $this->imgAttributes)?>
        </noscript>
    </div>
    <?php if ($this->showImageCaption && !empty($this->image_caption)) { ?>
    <figcaption class="<?=$this->bemClass('imageCaption')?> kwfUp-imageCaption" style="<?=$this->captionStyle;?>"><?=(!empty($this->image_caption) ? $this->image_caption : '');?></figcaption>
    <?php } ?>
    <?php if ($this->hasContent($this->linkTag)) { ?>
    </a>
    <?php } ?>
<?php } ?>
</figure>
