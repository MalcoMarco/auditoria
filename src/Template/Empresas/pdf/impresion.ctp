<?php

	$p1=0;
	$p2=0;
	$p3=0;
	$p4=0;
	$p5=0;
	$p6=0;
	$p7=0;
	$p8=0;
?>

<style type="text/css">
		table, td, th {    
		    border: 1px solid #ddd;
		    text-align: left;
		}

		table {
		    border-collapse: collapse;
		    width: 100%;
		}

		th, td {
		    padding: 15px;
		}

		h3{
			font-size: 60px;
			font-family: times;
		}

		.titulo{
		    text-align: center;
		    text-transform: uppercase;
		    color: blue;
		    font-size: 80px;
		}

		.titulo2{
		    text-align: center;
		    text-transform: uppercase;
		    color: blue;
		    font-size: 50px;
		}

		.center{
			text-align: justify;
			font-size: 38px;
		}
		.page_break {
		    page: teacher;
		    page-break-before: always;
		}
		.header, .footer {
		    margin:0 -100px;
		    padding:0 100px;
		    width: 100%;
		    position: fixed;
		}
		.header {
		    top: -40pt;
		    padding-bottom: 0px;
		}
		.footer {
		    bottom: 10px;
		    padding-top: 5px;
		    text-align: center;
		}

		.c {
			text-align: center;
		}

</style>

<!-- src/Template/Yop/pdf/view.ctp -->
<div class="footer">
	<em>--------------------------------------- Auditoria UNS - <?php $hoy = getdate(); echo $hoy['year']; ?> ---------------------------------------</em>
</div>


    	<h3 class="titulo"><?= h("Reportes de Auditoria") ?></h3>
    	<p class="c">(Auditoria)</p>
    	   <table>

			        <tr>
                  <th scope="row"><?= __('Nombre Empresa') ?></th>
			            <th scope="row"><?= __('RUC') ?></th>
			            <th scope="row"><?= __('Direccion') ?></th>
			        </tr>
						        <tr>
                        <td"><?= $empresa->nombre; ?></td>
						            <td"><?= $empresa->ruc; ?></td>
						            <td"><?= $empresa->direccion; ?></td>
						        </tr>

			</table>



<div class="related">
        <h4 class="titulo2"><?= __('Eficiencias') ?></h4>
        <?php if (!empty($empresa->eficiencias)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('E1') ?></th>
                <th scope="col"><?= __('E2') ?></th>
                <th scope="col"><?= __('E3') ?></th>
            </tr>
            <?php foreach ($empresa->eficiencias as $eficiencias): ?>
            <tr>
                <td><?= h($eficiencias->id) ?></td>
                <td><?= h($eficiencias->e1) ?></td>
                <td><?= h($eficiencias->e2) ?></td>
                <td><?= h($eficiencias->e3) ?></td>
               <?php 

               	if (isset($eficiencias->e1)) {
               		$p1++;
               	}
               	if (isset($eficiencias->e2)) {
               		$p1++;
               	}
               	if (isset($eficiencias->e3)) {
               		$p1++;
               	}

                ?>
            </tr>
            <?php endforeach; ?>

        </table>
        <?php 
        $r1="";

        	if ($p1 == 1 && $p1 > 0) {
        		$r1 = "BAJO";
        	}
        	if ($p1 == 2) {
        		$r1 = "MEDIO";
        	}
        	if ($p1 == 3) {
        		$r1 = "ALTO";
        	}

         ?>
        <h2>Ranking de Calidad de Software: <b><?php echo $r1; ?></b></h2>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4 class="titulo2"><?= __('Fiabilidades') ?></h4>
        <?php if (!empty($empresa->fiabilidades)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Fi1') ?></th>
                <th scope="col"><?= __('Fi2') ?></th>
                <th scope="col"><?= __('Fi3') ?></th>
                <th scope="col"><?= __('Fi4') ?></th>
            </tr>
            <?php foreach ($empresa->fiabilidades as $fiabilidades): ?>
            <tr>
                <td><?= h($fiabilidades->id) ?></td>
                <td><?= h($fiabilidades->fi1) ?></td>
                <td><?= h($fiabilidades->fi2) ?></td>
                <td><?= h($fiabilidades->fi3) ?></td>
                <td><?= h($fiabilidades->fi4) ?></td>
                <?php 

               	if (isset($fiabilidades->fi1)) {
               		$p2++;
               	}
               	if (isset($fiabilidades->fi2)) {
               		$p2++;
               	}
               	if (isset($fiabilidades->fi3)) {
               		$p2++;
               	}
               	if (isset($fiabilidades->fi4)) {
               		$p2++;
               	}

                ?>
                
            </tr>
            <?php endforeach; ?>
        </table>
        <?php 
        $r2;

        	if ($p2 == 1 && $p2 > 0) {
        		$r2 = "BAJO";
        	}
        	if ($p2 == 2 || $p2 == 3) {
        		$r2 = "MEDIO";
        	}
        	if ($p2 == 4) {
        		$r2 = "ALTO";
        	}


         ?>
        <h2>Ranking de Calidad de Software: <b><?php echo $r2; ?></b></h2>
        <?php endif; ?>
    </div>
    
  
    <div class="related">
        <h4 class="titulo2"><?= __('Funcionalidades') ?></h4>
        <?php if (!empty($empresa->funcionalidades)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Fu1') ?></th>
                <th scope="col"><?= __('Fu2') ?></th>
                <th scope="col"><?= __('Fu3') ?></th>
                <th scope="col"><?= __('Fu4') ?></th>
                <th scope="col"><?= __('Fu5') ?></th>
            </tr>
            <?php foreach ($empresa->funcionalidades as $funcionalidades): ?>
            <tr>
                <td><?= h($funcionalidades->id) ?></td>
                <td><?= h($funcionalidades->fu1) ?></td>
                <td><?= h($funcionalidades->fu2) ?></td>
                <td><?= h($funcionalidades->fu3) ?></td>
                <td><?= h($funcionalidades->fu4) ?></td>
                <td><?= h($funcionalidades->fu5) ?></td>
                <?php 

               	if (isset($funcionalidades->fu1)) {
               		$p3++;
               	}
               	if (isset($funcionalidades->fu2)) {
               		$p3++;
               	}
               	if (isset($funcionalidades->fu3)) {
               		$p3++;
               	}
               	if (isset($funcionalidades->fu4)) {
               		$p3++;
               	}
               	if (isset($funcionalidades->fu5)) {
               		$p3++;
               	}

                ?>
                
            </tr>
            <?php endforeach; ?>
        </table>
        <?php 
        $r3;

        	if ($p3 <= 2 && $p3 > 0) {
        		$r3 = "BAJO";
        	}
        	if ($p3 >=2 && $p3 < 5) {
        		$r3 = "MEDIO";
        	}
        	if ($p3 == 5) {
        		$r3 = "ALTO";
        	}


         ?>
        <h2>Ranking de Calidad de Software: <b><?php echo $r3; ?></b></h2>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4 class="titulo2"><?= __('Mantenibilidades') ?></h4>
        <?php if (!empty($empresa->mantenibilidades)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('M1') ?></th>
                <th scope="col"><?= __('M2') ?></th>
                <th scope="col"><?= __('M3') ?></th>
                <th scope="col"><?= __('M4') ?></th>
                <th scope="col"><?= __('M5') ?></th>
            </tr>
            <?php foreach ($empresa->mantenibilidades as $mantenibilidades): ?>
            <tr>
                <td><?= h($mantenibilidades->id) ?></td>
                <td><?= h($mantenibilidades->m1) ?></td>
                <td><?= h($mantenibilidades->m2) ?></td>
                <td><?= h($mantenibilidades->m3) ?></td>
                <td><?= h($mantenibilidades->m4) ?></td>
                <td><?= h($mantenibilidades->m5) ?></td>
                <?php 

               	if (isset($mantenibilidades->m1)) {
               		$p4++;
               	}
               	if (isset($mantenibilidades->m2)) {
               		$p4++;
               	}
               	if (isset($mantenibilidades->m3)) {
               		$p4++;
               	}
               	if (isset($mantenibilidades->m4)) {
               		$p4++;
               	}
               	if (isset($mantenibilidades->m5)) {
               		$p4++;
               	}

                ?>
                
            </tr>
            <?php endforeach; ?>
        </table>
        <?php 
        $r4;

        	if ($p4 <= 2 && $p4 > 0) {
        		$r4 = "BAJO";
        	}
        	if ($p4 > 2 && $p4 < 5) {
        		$r4 = "MEDIO";
        	}
        	if ($p4 == 5) {
        		$r4 = "ALTO";
        	}


         ?>
        <h2>Ranking de Calidad de Software: <b><?php echo $r4; ?></b></h2>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4  class="titulo2"><?= __('Portabilidades') ?></h4>
        <?php if (!empty($empresa->portabilidades)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('P1') ?></th>
                <th scope="col"><?= __('P2') ?></th>
                <th scope="col"><?= __('P3') ?></th>
                <th scope="col"><?= __('P4') ?></th>
                <th scope="col"><?= __('P5') ?></th>
            </tr>
            <?php foreach ($empresa->portabilidades as $portabilidades): ?>
            <tr>
                <td><?= h($portabilidades->id) ?></td>
                <td><?= h($portabilidades->p1) ?></td>
                <td><?= h($portabilidades->p2) ?></td>
                <td><?= h($portabilidades->p3) ?></td>
                <td><?= h($portabilidades->p4) ?></td>
                <td><?= h($portabilidades->p5) ?></td>
                <?php 

               	if (isset($portabilidades->p1)) {
               		$p5++;
               	}
               	if (isset($portabilidades->p2)) {
               		$p5++;
               	}
               	if (isset($portabilidades->p3)) {
               		$p5++;
               	}
               	if (isset($portabilidades->p4)) {
               		$p5++;
               	}
               	if (isset($portabilidades->p5)) {
               		$p5++;
               	}

                ?>
                
            </tr>
            <?php endforeach; ?>
        </table>
        <?php 
        $r5;

        	if ($p5 <= 2 && $p5 > 0) {
        		$r5 = "BAJO";
        	}
        	if ($p5 > 2 && $p5 < 5) {
        		$r5 = "MEDIO";
        	}
        	if ($p5 == 5) {
        		$r5 = "ALTO";
        	}


         ?>
        <h2>Ranking de Calidad de Software: <b><?php echo $r5; ?></b></h2>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4 class="titulo2"><?= __('Seguridades') ?></h4>
        <?php if (!empty($empresa->seguridades)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('S1') ?></th>
                <th scope="col"><?= __('S2') ?></th>
                <th scope="col"><?= __('S3') ?></th>
                <th scope="col"><?= __('S4') ?></th>
                <th scope="col"><?= __('S5') ?></th>
                
            </tr>
            <?php foreach ($empresa->seguridades as $seguridades): ?>
            <tr>
                <td><?= h($seguridades->id) ?></td>
                <td><?= h($seguridades->s1) ?></td>
                <td><?= h($seguridades->s2) ?></td>
                <td><?= h($seguridades->s3) ?></td>
                <td><?= h($seguridades->s4) ?></td>
                <td><?= h($seguridades->s5) ?></td>
                <?php 

               	if (isset($seguridades->s1)) {
               		$p7++;
               	}
               	if (isset($seguridades->s2)) {
               		$p7++;
               	}
               	if (isset($seguridades->s3)) {
               		$p7++;
               	}
               	if (isset($seguridades->s4)) {
               		$p7++;
               	}
               	if (isset($seguridades->s5)) {
               		$p7++;
               	}

                ?>
                
            </tr>
            <?php endforeach; ?>
        </table>
        <?php 
        $r7;

        	if ($p7 <= 2 && $p7 > 0) {
        		$r7 = "BAJO";
        	}
        	if ($p7 > 2 && $p7 < 5) {
        		$r7 = "MEDIO";
        	}
        	if ($p7 == 5) {
        		$r7 = "ALTO";
        	}


         ?>
        <h2>Ranking de Calidad de Software: <b><?php echo $r7; ?></b></h2>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4  class="titulo2"><?= __('Usabilidades') ?></h4>
        <?php if (!empty($empresa->usabilidades)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('U1') ?></th>
                <th scope="col"><?= __('U2') ?></th>
                <th scope="col"><?= __('U3') ?></th>
                <th scope="col"><?= __('U4') ?></th>
                <th scope="col"><?= __('U5') ?></th>
                
            </tr>
            <?php foreach ($empresa->usabilidades as $usabilidades): ?>
            <tr>
                <td><?= h($usabilidades->id) ?></td>
                <td><?= h($usabilidades->u1) ?></td>
                <td><?= h($usabilidades->u2) ?></td>
                <td><?= h($usabilidades->u3) ?></td>
                <td><?= h($usabilidades->u4) ?></td>
                <td><?= h($usabilidades->u5) ?></td>
				<?php 

               	if (isset($usabilidades->u1)) {
               		$p6++;
               	}
               	if (isset($usabilidades->u2)) {
               		$p6++;
               	}
               	if (isset($usabilidades->u3)) {
               		$p6++;
               	}
               	if (isset($usabilidades->u4)) {
               		$p6++;
               	}
               	if (isset($usabilidades->u5)) {
               		$p6++;
               	}

                ?>
                
            </tr>
            <?php endforeach; ?>
        </table>
        <?php 
        $r6;

        	if ($p6 <= 2 && $p6 > 0) {
        		$r6 = "BAJO";
        	}
        	if ($p6 > 2 && $p6 < 5) {
        		$r6 = "MEDIO";
        	}
        	if ($p6 == 5) {
        		$r6 = "ALTO";
        	}


         ?>
        <h2>Ranking de Calidad de Software: <b><?php echo $r6; ?></b></h2>
        <?php endif; ?>
    </div>

    <div class="related">
        <h4  class="titulo2"><?= __('Compatitibilidades') ?></h4>
        <?php if (!empty($empresa->compatitibilidades)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('U1') ?></th>
                <th scope="col"><?= __('U2') ?></th>
                <th scope="col"><?= __('U3') ?></th>
              
                
            </tr>
            <?php foreach ($empresa->compatitibilidades as $compatitibilidades): ?>
            <tr>
                <td><?= h($compatitibilidades->id) ?></td>
                <td><?= h($compatitibilidades->c1) ?></td>
                <td><?= h($compatitibilidades->c2) ?></td>
                <td><?= h($compatitibilidades->c3) ?></td>
                <?php 

               	if (isset($compatitibilidades->c1)) {
               		$p8++;
               	}
               	if (isset($compatitibilidades->c2)) {
               		$p8++;
               	}
               	if (isset($compatitibilidades->c3)) {
               		$p8++;
               	}

                ?>
            </tr>
            <?php endforeach; ?>

        </table>
        <?php 
        $r8="";

        	if ($p8 == 1 && $p8 > 0) {
        		$r8 = "BAJO";
        	}
        	if ($p8 == 2) {
        		$r8 = "MEDIO";
        	}
        	if ($p8 == 3) {
        		$r8 = "ALTO";
        	}

         ?>
        <h2>Ranking de Calidad de Software: <b><?php echo $r8; ?></b></h2>
        <?php endif; ?>
    </div>

    


