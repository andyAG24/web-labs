<?php
	echo '
    <div class="content">

      <div class="centering-element">
        <div class="car-image">
          <img src="">
        </div>
        <div class="car-info">
          <div class="car-info-title"></div>
          <div class="car-info-characteristics">
            Двигатель: <span id="car-info-engine"></span> л<br>
            Расход: <span id="car-info-engine-consumption"></span> л на 100 км (трасса)<br>
            Максимальная скорость: <span id="car-info-max-speed"></span> км/ч<br>
            Максимальная мощность: <span id="car-info-hp"></span> л.с.<br>
            Крутящий момент: <span id="car-info-engine-torque"></span> нм<br>
            Разгон до 100 км/ч: <span id="car-info-to-100"></span> с<br>
          </div>
        </div>
      </div>

      <!-- Страничная навигация-->
      <div class="pagination">
        <a href="#" class="first" data-action="first">&laquo;</a>
        <a href="#" class="previous" data-action="previous">&lsaquo;</a>
        <input type="text" readonly="readonly" data-max-page="5" />
        <a href="#" class="next" data-action="next">&rsaquo;</a>
        <a href="#" class="last" data-action="last">&raquo;</a>
      </div>
      <!------------------------->
    
    </div>';
	?>