<aside id="block-right">



<div id="show-sidebar">
<input type="radio" name="menu-state" id="hidden" checked value="1"/>
<input type="radio" name="menu-state" id="visible" value="2"/>

<label class="show-menu" for="visible">Вибрати Місто</label>

<label class="overlay" for="hidden"></label>

<div class="menu-over">
    <label class="close-menu" for="hidden">Закрити</label>




<div class="show-login-i-misto">



<div id="sidebar-misto">

<h2>Місто</h2>
<ul>
<li><a href="/category/kyyiv/" title="Київ">Київ</a></li>
<li><a href="/category/rivne/" title="Рівне">Рівне</a></li>
<li><a href="/category/lutsk/" title="Луцьк">Луцьк</a></li>
<li><a href="/category/lviv/" title="Львів">Львів</a></li>
<li><a href="/category/ternopil/" title="Тернопіль">Тернопіль</a></li>
<li><a href="/category/vinnytsya/" title="Вінниця">Вінниця</a></li>
<li><a href="/category/zhytomyr/" title="Житомир">Житомир</a></li>
<li><a href="/category/hmelnytskyj/" title="Хмельницький">Хмельницький</a></li>
<li><a href="/category/ivano-frankivsk/" title="Івано-Франківськ">Івано-Франківськ</a></li>
<li><a href="/category/zaporizhzhya/" title="Запоріжжя">Запоріжжя</a></li>
<li><a href="/category/kropuvnutskiy/" title="Кропивницький">Кропивницький</a></li>
<li><a href="/category/mykolayiv/" title="Миколаїв">Миколаїв</a></li>
<li><a href="/category/odesa/" title="Одеса">Одеса</a></li>
<li><a href="/category/poltava/" title="Полтава">Полтава</a></li>
<li><a href="/category/sumy/" title="Суми">Суми</a></li>
<li><a href="/category/uzhgorod/" title="Ужгород">Ужгород</a></li>
<li><a href="/category/harkiv/" title="Харків">Харків</a></li>
<li><a href="/category/dnipro/" title="Дніпро">Дніпро</a></li>
<li><a href="/category/donetsk/" title="Донецьк">Донецьк</a></li>
<li><a href="/category/herson/" title="Херсон">Херсон</a></li>
<li><a href="/category/cherkasy/" title="Черкаси">Черкаси</a></li>
<li><a href="/category/chernivtsi/" title="Чернігів">Чернігів</a></li>
<li><a href="/category/chernigiv/" title="Чернівці">Чернівці</a></li>
</ul>
</div>
</div>

<script>
var raz = document.getElementsByName('menu-state');
for (var i = 0; i < raz.length; i++) {
  raz[i].onclick = function() {
    localStorage.setItem('IRadioRaz', this.value);
  }
}
if(localStorage.getItem('IRadioRaz')) {
  var IRadioRaz = localStorage.getItem('IRadioRaz');
  document.querySelector('input[name="menu-state"][value="' + IRadioRaz + '"]').setAttribute('checked','checked');
}
</script>


</div>
</div>



</aside>