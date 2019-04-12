<!-- Товар 1 -->
<div class="col-sm-6 col-md-6 col-lg-4">
    <article class="card mb-4">
        <div class="card-top">
            <?php if ($product['sale']) { ?>
                <div class="card-top__sale">Sale</div>
            <?php } else if ($product['new']) { ?>
                <div class="card-top__new">Новинка</div>
            <?php } ?>
            <div class="card-top__cat"><?=$product['category']?></div>
        </div>
        <div class="product-img">
            <img src="img/products/<?=$product['img']?>">
        </div>
        <div class="card-body">
            <h4 class="item-title"><a href="product-page.php?id=<?=$product['id']?>"><?=$product['title']?></a></h4>
            <div class="card-btn">
                <div class="card-btn__price">
                    <?=$product['price']?> ₽
                </div>
                <div class="card-btn__btn">
                    Купить
                </div>
            </div>
        </div>
    </article>
</div>
<!-- // Товар 1 -->