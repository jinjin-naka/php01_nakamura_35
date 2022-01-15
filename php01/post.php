<html>

<head>
    <meta charset="utf-8">
    <title>資産運用アンケート</title>
</head>

<body>
<section id="contact" class="contact__section">
  <div class="contact__wrapper">
    <div class="form__wrapper">
    <form action="write.php" method="post">
    <dl class="form__inner">
        <dt class="form__title">お名前: 
            <dd class="form__item"><input type="text" name="name">
        <dt class="form__title">メールアドレス: 
            <dd class="form__item"><input type="email" name="mailaddress">
        <dt class="form__title">金融資産に占める預金比率(感覚でOKです): 
            <dd class="form__item"><input type="range" name="depositrate"
         min='0%' max='100%'>
         <dt class="form__title">金融サービスで最近不満に感じたこと: 
             <dd class="form__item"><input type="text" name="angry" cols="30" rows="5" class="form__parts1">
         <dt class="form__title">保有金融資産: 
            <dd class="form__item">
                <input type="checkbox" name='ownasset[]' value="stock"><label for="stock">株式・ETF</label>
                <input type="checkbox" name='ownasset[]' value="toushin"><label for="toushin">投資信託</label>
                <input type="checkbox" name='ownasset[]' value="dc"><label for="dc">DC・iDeCo</label>
                <input type="checkbox" name='ownasset[]' value="insurance"><label for="insurance">保険</label>
                <input type="checkbox" name='ownasset[]' value="robo"><label for="robo">ロボアド</label>
         <dt class="form__title">運用シミュレーションに興味のある金融商品: 
            <dd class="form__item">
                <input type="radio" name="product" value="deposit"><label for="deposit">円預金</label>
                <input type="radio" name="product" value="jpindex"><label for="jpindex">日本株式Index</label>
                <input type="radio" name="product" value="usbond"><label for="usbond">米国中長期債</label>
                <input type="radio" name="product" value="worldindex"><label for="worldindex">世界株式Index</label>
                <input type="radio" name="product" value="advindex"><label for="advindex">先進国株式Index</label>
                <input type="radio" name="product" value="devindex"><label for="devindex">新興国株式Index</label>

        <br><input type="submit" value="送信">
    </dl>
    </form>
    </div>
    </div>
</section>
</body>

</html>
