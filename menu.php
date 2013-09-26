<!--[if (gt IE 7)&(lt IE 10)]><ul><![endif]-->
<!--[if !(gt IE 7)&(lt IE 10)]><!--> <ul class="accordion"> <!--<![endif]-->
   <li <?php if ($active_page=="Inicio") echo " class='active'"; ?> id="inicio"><a href="/inicio"><span>Inicio</span></a></li>
   <li <?php if ($active_page=="nosotros") echo " class='active'"; ?>><a href="/nosotros"><span>La empresa</span></a></li>
   <li <?php if ($active_page=="productos") echo " class='active has-sub'"; elseif($active_page!=="productos") echo "class='has-sub'"?>><a><span>Productos</span></a>
      <ul>
         <li class="has-sub"><a href="#"><span>Bombas Sumergibles</span></a>
            <ul>
               <li><a href="/kor"><span>Serie Kor</span> </a></li>
               <li><a href="/bs"><span>Serie BS</span> </a></li>
               <li><a href="/t"><span>Serie T</span> </a></li>
               <li class="has-sub"><a href="#"><span>Para drenaje</span> </a>
               		<ul>
		               <li><a href="/amiga"><span>Amiga</span> </a></li>
		               <li class="has-sub"><a href="#"><span>Linea profesional</span> </a>
		               		<ul class="has-sub">
				               <li><a href="/apf"><span>Serie APF</span> </a></li>
				               <li><a href="/apl"><span>Serie APL</span> </a></li>
				               <li><a href="/apld"><span>Serie APLD</span> </a></li>
				               <li><a href="/apll"><span>Serie APLL</span> </a></li>
				               <li><a href="/apt"><span>Serie APT</span> </a></li>
				            </ul>
		               </li>
		            </ul>
               </li>
            </ul>
         </li>
         <li class="has-sub"><a href="#"><span>Motores Sumergibles</span></a>
         	<ul>
               <li><a href="/k"><span>Serie K</span> </a></li>
               <li><a href="/r"><span>Serie R</span> </a></li>
            </ul>
         </li>
         <li><a href="/scala"><span>Bombas de Superficie</span></a></li>
          <li class="has-sub"><a href="#"><span>Bombas Industriales</span></a>
         	<ul>
         		<li><a href="/tx"><span>Serie TX</span> </a></li>
            	<li><a href="/ax"><span>Serie AX</span> </a></li>
            	<li><a href="/job"><span>Serie Job</span> </a></li>
            	<li><a href="/altapres"><span>Serie Altapres</span> </a></li>
            	<li><a href="/altapres2"><span>Serie Altapres 2</span> </a></li>
         	</ul>
         </li>
         <li class="has-sub"><a href="#"><span>Presurizadores</span></a>
         	<ul>
         	    <li><a href="/preskit"><span>Una Bomba con Kit</span></a></li>
         	    <li><a href="/presurizadores"><span>Una Bomba con Tanque</span></a></li>
         	    <li class="has-sub"><a href="#"><span>Multiples</span></a>
         	    	<ul>
		         	    <li><a href="/velocidad-constante"><span>Velocidad constante</span></a></li>
		         	    <li><a href="/presion-constante"><span>Presi&oacute;n constante</span></a></li>
		         	</ul>
         	    </li>
         	</ul>
         </li>
         <li class="has-sub"><a href="#"><span>Tanques</span></a>
         	<ul>
         	    <li><a href="/acero"><span>Serie Acero</span></a></li>
         	    <li><a href="/pro"><span>Serie Pro</span></a></li>
         	    <li><a href="/prox"><span>Serie Pro-X</span></a></li>
         	    <li><a href="/proxl"><span>Serie Pro-XL</span></a></li>
         	    <li><a href="/sky"><span>Serie Sky</span></a></li>
         	</ul>
         </li>
         <li class="has-sub"><a href="#"><span>Accesorios</span></a>
         	<ul>
         	    <li><a href="/arrancadores"><span>Arrancadores</span></a></li>
         	    <li class="has-sub"><a href="#"><span>Tableros</span></a>
         	    	<ul>
		         	    <li><a href="/tableros-velocidad-constante"><span>Velocidad constante</span></a></li>
		         	    <li><a href="/tableros-presion-constante"><span>Presi&oacute;n constante</span></a></li>
		         	</ul>
         	    </li>
         	    <li><a href="/tubos"><span>Tubo para columna</span></a></li>
         	    <li><a href="/cable"><span>Cable sumergible</span></a></li>
         	    <li><a href="/valvulas"><span>V&aacute;lvulas</span></a></li>
         	    <li><a href="/manometro"><span>Man&oacute;metro</span></a></li>
         	    <li><a href="/switch"><span>Switch de presi&oacute;n</span></a></li>
         	    <li><a href="/flotador"><span>Switch flotador</span></a></li>
         	    <li><a href="/pres10"><span>Press 10</span></a></li>
         	</ul>
         </li>
      </ul>
   </li>
   <li <?php if ($active_page=="novedades") echo " class='active'"; ?>><a href="/novedades"><span>Nuevos productos</span></a></li>
   <li <?php if ($active_page=="contacto") echo " class='active'"; ?>><a href="/contacto"><span>Contacto</span></a></li>
</ul>