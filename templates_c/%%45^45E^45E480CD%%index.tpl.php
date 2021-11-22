<?php /* Smarty version 2.6.32, created on 2021-11-22 03:28:12
         compiled from index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'index.tpl', 24, false),)), $this); ?>
<!DOCTYPE HTML>
<html lang="jp">
<head>
    <title>西暦を和暦に,和暦を西暦に変換！</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="../Comn/style.css">

    <script type="text/javascript" src="../Comn/index.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, user-scalable=yes">

    <meta charset="utf-8">
</head>
<body>
<div class="wrapper">
    <div class="pt-3">
        <h1 class="text-center border-bottom border-dark big_title">和暦を西暦に、西暦を和暦に変換！</h1>
    </div>
    <a href="/kadai/Home/controller/TOP.php" class="back">URL集に戻る</a>

    <h3 class="text-center today_date">今日は西暦<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y/%m/%d") : smarty_modifier_date_format($_tmp, "%Y/%m/%d")); ?>
日です</h3>
    <div class="tab-panel">
        <ul class="tab-group">
            <li class="seireki tab tab-A is-active">西暦⇒和暦</li>
            <li class="transparent_content"></li>
            <li class="wareki tab tab-B">和暦⇒西暦</li>
        </ul>
        <div class="panel-group">
            <div class="panel tab-A is-show">
                <div class="text-center square_background">
                    <?php if ($this->_tpl_vars['flag'] == 1): ?>
                    <div class="result_cal">
                        <h2 class="text-center font-size"><?php echo $this->_tpl_vars['subtitle']; ?>
</h2>
                        <div class="trans_block"></div>
                        <h2 class="text-center font-size"><?php echo $this->_tpl_vars['cal_result']; ?>
</h2>
                        <?php endif; ?>
                        <?php if ($this->_tpl_vars['wareki_flag'] == 1): ?>
                        <h3 class="text-center font-size"><?php echo $this->_tpl_vars['wareki_subtitle']; ?>
</h3>
                        <div class="trans_block"></div>
                        <h3 class="text-center font-size"><?php echo $this->_tpl_vars['wareki_result']; ?>
</h3>
                    </div>
                    <?php endif; ?>
                </div>

                                <div class="py-5 text-center">
                    <h5 class="text-center"><?php echo $this->_tpl_vars['validation']; ?>
</h5>
                    <form action="/kadai/koyomi/controller/controller.php" method="get">
                        <div class="head_title">
                            <input maxlength="4" type="tel" name="seireki" class="year_text_field">
                            <input type="tel" name="month" class="text_field " maxlength="2" width="30">
                            <input type="tel" name="day" class="text_field " maxlength="2">
                            <input type="submit" value="変換する" class="button">
                        </div>
                    </form>
                </div>
                <div class="block"></div>
                <h3 class="text-center border_subtitle">日付・年数表現　とは</h3>
                <div class="container border-box text-center">
                    <h5 class="sentence"><b>・</b>
                        元号の後に年数を続ける。ただし1年は「○○元年」とするのが普通（特に縦書きの場合）。また、横書き固定長の場合、1桁の年数は月数や日数と同様、0または空白を詰めて、（「02年」「
                        2年」のように）2桁とする。</h5>
                    <br>
                    <h5 class="sentence"><b>・</b>
                        大化以前および大宝以前の元号の空白期間は、天皇の名を元号の代わりに使うのが慣例である。たとえば、十七条憲法が公布された西暦604年は「推古（天皇）12年」のように表す。</h5>
                    <br>
                    <h5 class="sentence"><b>・</b> 明治以降の元号を表す表現としては、漢字1字の略記（明・大・昭・平・令）や英字1字の略記（M・T・S・H・R）も使われる。これらの略記は
                        JIS X
                        0301 で規定されている。なお、明治の前の元号は慶応、その前は元治であるが、それらの略記はJISには含まれておらず、期間がごく短いこともあいまって実際に使われることはほぼない。</h5>
                    <br>
                    <h5 class="sentence"><b>・</b>
                        数十年先の未来の年数表現に元号を用いた場合、（今後の改元などは想定できないことから）3桁以上にもなりうる。たとえば、平成の元号を用いて西暦2100年を表現した場合、平成112年とせざるを得なかった。
                    </h5>
                </div>
                <div class="sub_sentence ">
                    <div class="block_head"></div>
                    <h2 class="mini_heading">令和⇒西暦の計算方法</h2>
                    <div class="sentence_block">
                        <p>令和〇〇年から１８を足すことで西暦に変換できます。</p>
                        <p>例：令和元年 (1) + 18 + 2000 = 2019年</p>
                        <p>大事なことは、「18を足した下二桁」です。</p>
                    </div>
                    <h2 class=" mini_heading">西暦⇒令和の計算方法</h2>
                    <div class="sentence_block">
                        <p>西暦から18を引くことで令和に変換できます。</p>
                        <p>例：2019 - 18 = 令和1年</p>
                        <p>2021年の場合、2021 - 18 = 3で、令和3年になります。</p>
                        <p>大事なことは、「西暦から18を引くこと」です。</p>
                    </div>
                    <h2 class=" mini_heading">平成⇒西暦の計算方法</h2>
                    <div class="sentence_block">
                        <p>平成〇〇年から12を引くことで西暦に変換できます。</p>
                        <p>例１：平成31年 - 12 = 2019年</p>
                        <p>例２：平成20年 - 12 = 2008年</p>
                        <p>大事なことは、「平成から12を引くこと」です。</p>
                    </div>
                    <h2 class=" mini_heading">西暦⇒平成の計算方法</h2>
                    <div class="sentence_block">
                        <p>西暦から12を足した数(2015なら⇒15+12)の下二桁が平成の年になります。</p>
                        <p>例１：2005年 + 12 = 平成17年</p>
                        <p>例２：1990年 + 12 = 平成12年</p>
                        <p>大事なことは「西暦に12を足した下二桁」です。</p>
                    </div>
                    <h2 class="mini_heading">昭和⇒西暦の計算方法</h2>
                    <div class="sentence_block">
                        <p>昭和〇〇年 + 25を足した数の下二桁が西暦になります</p>
                        <p>例１：昭和5年 + 25 = 1930年</p>
                        <p>例２：昭和41年 + 25 = 1966年</p>
                        <p>大事なことは、「昭和に２５を足すこと」です。</p>
                    </div>
                    <h2 class=" mini_heading">西暦⇒昭和の計算方法</h2>
                    <div class="sentence_block">
                        <p>西暦から25を引いた数(1962なら⇒62-25)の下二桁が昭和になります。</p>
                        <p>例１：1934年 - 25 = 昭和9年</p>
                        <p>例２：1989年 - 25 = 昭和64年/平成元年</p>
                        <p>大事なことは、「西暦から12を引いた下二桁」です。</p>
                    </div>
                </div>
            </div>


            <div class="panel tab-B">
                <div class="py-5 text-center">
                    <h5 class="text-center"><?php echo $this->_tpl_vars['wareki_valida']; ?>
</h5>
                    <form action="/kadai/koyomi/controller/controller.php" method="get">
                        <select name="example" class=form-select" aria-label="Default select example">
                            <option name="reiwa" value="reiwa">令和</option>
                            <option name="heisei" value="heisei">平成</option>
                            <option name="showa" value="showa">昭和</option>
                        </select>
                        <input maxlength="4" type="tel" name="wareki" class="year_text_field">
                        <input type="tel" name="month" class="text_field" maxlength="2" width="30">
                        <input type="tel" name="day" class="text_field" maxlength="2">
                        <input type="submit" value="変換する" class="button">
                    </form>
                </div>
                <div class="block"></div>
                <h3 class="text-center">日付・年数表現　とは</h3>
                <div class="container border-box">
                    <h5 class="sentence"><b>・</b>
                        元号の後に年数を続ける。ただし1年は「○○元年」とするのが普通（特に縦書きの場合）。また、横書き固定長の場合、1桁の年数は月数や日数と同様、0または空白を詰めて、（「02年」「
                        2年」のように）2桁とする。</h5>
                    <br>
                    <h5 class="sentence"><b>・</b>
                        大化以前および大宝以前の元号の空白期間は、天皇の名を元号の代わりに使うのが慣例である。たとえば、十七条憲法が公布された西暦604年は「推古（天皇）12年」のように表す。</h5>
                    <br>
                    <h5 class="sentence"><b>・</b> 明治以降の元号を表す表現としては、漢字1字の略記（明・大・昭・平・令）や英字1字の略記（M・T・S・H・R）も使われる。これらの略記は
                        JIS X
                        0301 で規定されている。なお、明治の前の元号は慶応、その前は元治であるが、それらの略記はJISには含まれておらず、期間がごく短いこともあいまって実際に使われることはほぼない。</h5>
                    <br>
                    <h5 class="sentence"><b>・</b>
                        数十年先の未来の年数表現に元号を用いた場合、（今後の改元などは想定できないことから）3桁以上にもなりうる。たとえば、平成の元号を用いて西暦2100年を表現した場合、平成112年とせざるを得なかった。
                    </h5>
                </div>
                <div class="sub_sentence ">
                    <div class="block_head"></div>
                    <h2 class="text-center mini_heading">令和⇒西暦の計算方法</h2>
                    <div class="sentence_block">
                        <p>令和〇〇年から１８を足すことで西暦に変換できます。</p>
                        <p>例：令和元年 (1) + 18 + 2000 = 2019年</p>
                        <p>大事なことは、「18を足した下二桁」です。</p>
                    </div>
                    <h2 class="text-center mini_heading">西暦⇒令和の計算方法</h2>
                    <div class="sentence_block">
                        <p>西暦から18を引くことで令和に変換できます。</p>
                        <p>例：2019 - 18 = 令和1年</p>
                        <p>2021年の場合、2021 - 18 = 3で、令和3年になります。</p>
                        <p>大事なことは、「西暦から18を引くこと」です。</p>
                    </div>
                    <h2 class="text-center mini_heading">平成⇒西暦の計算方法</h2>
                    <div class="sentence_block">
                        <p>平成〇〇年から12を引くことで西暦に変換できます。</p>
                        <p>例１：平成31年 - 12 = 2019年</p>
                        <p>例２：平成20年 - 12 = 2008年</p>
                        <p>大事なことは、「平成から12を引くこと」です。</p>
                    </div>
                    <h2 class="text-center mini_heading">西暦⇒平成の計算方法</h2>
                    <div class="sentence_block">
                        <p>西暦から12を足した数(2015なら⇒15+12)の下二桁が平成の年になります。</p>
                        <p>例１：2005年 + 12 = 平成17年</p>
                        <p>例２：1990年 + 12 = 平成12年</p>
                        <p>大事なことは「西暦に12を足した下二桁」です。</p>
                    </div>
                    <h2 class="text-center mini_heading">昭和⇒西暦の計算方法</h2>
                    <div class="sentence_block">
                        <p>昭和〇〇年 + 25を足した数の下二桁が西暦になります</p>
                        <p>例１：昭和5年 + 25 = 1930年</p>
                        <p>例２：昭和41年 + 25 = 1966年</p>
                        <p>大事なことは、「昭和に２５を足すこと」です。</p>
                    </div>
                    <h2 class="text-center mini_heading">西暦⇒昭和の計算方法</h2>
                    <div class="sentence_block">
                        <p>西暦から25を引いた数(1962なら⇒62-25)の下二桁が昭和になります。</p>
                        <p>例１：1934年 - 25 = 昭和9年</p>
                        <p>例２：1989年 - 25 = 昭和64年/平成元年</p>
                        <p>大事なことは、「西暦から12を引いた下二桁」です。</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>




