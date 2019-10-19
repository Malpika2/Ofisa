<style type="text/css">
.thank-you-pop{
	width:100%;
 	padding:20px;
	text-align:center;
}
.thank-you-pop h1{
	font-size: 42px;
    margin-bottom: 25px;
	color:#5C5C5C;
}
.thank-you-pop p{
	font-size: 20px;
    margin-bottom: 27px;
 	color:#5C5C5C;
}
.thank-you-pop h3{
	font-size: 25px;
    margin-bottom: 10px;
	color:#222;
	display:block;
	text-align:left;
	padding:0px 10px;
	clear:both;
	font-weight:normal;
}
#modal9 .modal-header{
    border:0px;
}
#ui-id-1{
	z-index: 1500;
}
</style>
<!-- Income Cards -->
<div class="card g-brd-gray-light-v7 g-mb-30">
    <header class="media g-pa-15 g-pa-25-30-0--md g-mb-20">
      <div class="media-body align-self-center">
        <h3 class="text-uppercase g-font-size-default g-color-black g-mb-8">Historial de recados</h3>
			
        <div id="rangePickerWrapper3" class="u-datepicker-left u-datepicker--v3 g-pr-10">
          <input id="rangeDatepicker3" class="g-font-size-12 g-font-size-default--md" type="text" data-rp-wrapper="#rangePickerWrapper3" data-rp-type="range" data-rp-date-format="d M Y" data-rp-default-date='["01 Jan 2016", "31 Dec 2017"]'>
          <i class="hs-admin-angle-down g-absolute-centered--y g-right-0 g-color-gray-light-v3"></i>
        </div>
        <button type="button" href="#modal9" class="btn btn-success float-right text-center" data-target="#modal9" data-toggle="modal" data-modal-effect="superscaled"><i class="fa fa-plus-square fa-2x"></i>&nbsp;<b style="vertical-align: super;">Nuevo</b></button>
      </div>
    </header>
    <div class="js-custom-scroll g-height-500 g-pa-15 g-pa-0-30-25--md">
      <table class="table table-responsive-sm w-100">
        <thead>
          <tr>
            <th class="text-center g-font-weight-300 g-color-gray-dark-v6 g-brd-top-none g-pl-20">#</th>
            <th class="text-center g-font-weight-300 g-color-gray-dark-v6 g-brd-top-none">Tecnico</th>
            <th class="text-center g-font-weight-300 g-color-gray-dark-v6 g-brd-top-none">Estatus</th>
            <th class="text-center g-font-weight-300 g-color-gray-dark-v6 g-brd-top-none">Fecha registro</th>
            <th class="text-center g-font-weight-300 g-color-gray-dark-v6 g-brd-top-none">Detalles</th>
            <th class="text-center g-font-weight-300 g-color-gray-dark-v6 g-brd-top-none">
            Notificación
            </th>
          </tr>
        </thead>
        <tbody>
	        <?php foreach ($recados as $recado): ?>
	        	<?php 
		        	switch($recado->estatus_recado){
		        		case 'ENVIADO':
		        			$clase_estatus='u-tags-v1 text-center g-width-100 g-brd-around g-brd-lightred-v2 g-bg-lightred-v2 g-font-size-default g-color-white g-rounded-50 g-py-4 g-px-15';
		        			break;
	        			case 'ATENDIDO':
	        				$clase_estatus='u-tags-v1 text-center g-width-100 g-brd-around g-brd-teal-v2 g-bg-teal-v2 g-font-size-default g-color-white g-rounded-50 g-py-4 g-px-15';
	        				break;
	        			case 'EN ATENCIÓN':
	        				$clase_estatus='u-tags-v1 text-center g-width-100 g-brd-around g-brd-lightblue-v3 g-bg-lightblue-v3 g-font-size-default g-color-white g-rounded-50 g-py-4 g-px-15';
	        				break;
		        	} 
	        	?>
	        <tr>
	        	<td class=" text-center g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10 g-pl-20"><span class="<?php ?>"><?php echo $recado->id_recado; ?></span></td>
	        	<td class=" text-center g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10 g-pl-20"><span class="<?php ?>"><?php echo $recado->nombre.' '.$recado->apellidoP; ?></span></td>
	        	<td class=" text-center g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10 g-pl-20"><span class="<?php echo $clase_estatus;?>"><?php echo $recado->estatus_recado; ?></span></td>
	        	<td class=" text-center g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10 g-pl-20"><span class="<?php ?>"><?php echo date('d-m-Y',$recado->fecha_registro); ?></span></td>
	        	<td class=" text-left g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10 g-pl-20"><span class="<?php ?>"><?php echo $recado->asunto; ?></span></td>
	        	<td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-5 g-pl-5">
	        		<?php if ($recado->notificacion_whatsapp=='SI')
	        		{?>
	        			<span class="g-valign-middle u-icon-v1 g-rounded-10 g-bg-green-opacity-0_1">
						  <i class="fa fa-whatsapp g-color-green u-line-icon-pro"></i>
						</span>
	        		<?php } ?>
	        		<?php if ($recado->notificacion_correo=='SI')
	        		{?>
	        			<span class="g-valign-middle u-icon-v1 g-rounded-10 g-bg-red-opacity-0_1 ">
						  <i class="icon-communication-025 g-color-red u-line-icon-pro"></i>
						</span>
					<?php } ?>
	        		
	        	</td>
	        </tr>	
	        <?php endforeach ?>
          <tr>
            <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10 g-pl-20">1</td>
            <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">Business Cards</td>
            <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">
              <span class="u-tags-v1 text-center g-width-100 g-brd-around g-brd-lightblue-v3 g-bg-lightblue-v3 g-font-size-default g-color-white g-rounded-50 g-py-4 g-px-15">approved</span>
            </td>
            <td class="g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">Aug 12, 2016</td>
            <td class="text-right g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">$2045</td>
          </tr>

          <tr>
            <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10 g-pl-20">2</td>
            <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">Advertising Outdoors</td>
            <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">
              <span class="u-tags-v1 text-center g-width-100 g-brd-around g-brd-lightred-v2 g-bg-lightred-v2 g-font-size-default g-color-white g-rounded-50 g-py-4 g-px-15">pending</span>
            </td>
            <td class="g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">Jun 6, 2016</td>
            <td class="text-right g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">$995</td>
          </tr>

          <tr>
            <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10 g-pl-20">3</td>
            <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">Freelance Design</td>
            <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">
              <span class="u-tags-v1 text-center g-width-100 g-brd-around g-brd-teal-v2 g-bg-teal-v2 g-font-size-default g-color-white g-rounded-50 g-py-4 g-px-15">done</span>
            </td>
            <td class="g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">Sep 8, 2016</td>
            <td class="text-right g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">$1025</td>
          </tr>

          <tr>
            <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10 g-pl-20">4</td>
            <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">Music Improvement</td>
            <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">
              <span class="u-tags-v1 text-center g-width-100 g-brd-around g-brd-lightblue-v3 g-bg-lightblue-v3 g-font-size-default g-color-white g-rounded-50 g-py-4 g-px-15">approved</span>
            </td>
            <td class="g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">Dec 20, 2016</td>
            <td class="text-right g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">$9562</td>
          </tr>

          <tr>
            <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom--md g-brd-2 g-brd-gray-light-v4 g-py-10 g-pl-20">5</td>
            <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom--md g-brd-2 g-brd-gray-light-v4 g-py-10">Truck Advertising</td>
            <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom--md g-brd-2 g-brd-gray-light-v4 g-py-10">
              <span class="u-tags-v1 text-center g-width-100 g-brd-around g-brd-teal-v2 g-bg-teal-v2 g-font-size-default g-color-white g-rounded-50 g-py-4 g-px-15">done</span>
            </td>
            <td class="g-valign-middle g-brd-top-none g-brd-bottom--md g-brd-2 g-brd-gray-light-v4 g-py-10">Dec 24, 2016</td>
            <td class="text-right g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom--md g-brd-2 g-brd-gray-light-v4 g-py-10">$5470</td>
          </tr>

          <tr>
            <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10 g-pl-20">6</td>
            <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">Business Cards</td>
            <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">
              <span class="u-tags-v1 text-center g-width-100 g-brd-around g-brd-lightblue-v3 g-bg-lightblue-v3 g-font-size-default g-color-white g-rounded-50 g-py-4 g-px-15">approved</span>
            </td>
            <td class="g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">Aug 12, 2016</td>
            <td class="text-right g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">$2045</td>
          </tr>

          <tr>
            <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10 g-pl-20">7</td>
            <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">Advertising Outdoors</td>
            <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">
              <span class="u-tags-v1 text-center g-width-100 g-brd-around g-brd-lightred-v2 g-bg-lightred-v2 g-font-size-default g-color-white g-rounded-50 g-py-4 g-px-15">pending</span>
            </td>
            <td class="g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">Jun 6, 2016</td>
            <td class="text-right g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">$995</td>
          </tr>

          <tr>
            <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10 g-pl-20">8</td>
            <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">Freelance Design</td>
            <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">
              <span class="u-tags-v1 text-center g-width-100 g-brd-around g-brd-teal-v2 g-bg-teal-v2 g-font-size-default g-color-white g-rounded-50 g-py-4 g-px-15">done</span>
            </td>
            <td class="g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">Sep 8, 2016</td>
            <td class="text-right g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">$1025</td>
          </tr>

          <tr>
            <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10 g-pl-20">9</td>
            <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">Music Improvement</td>
            <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">
              <span class="u-tags-v1 text-center g-width-100 g-brd-around g-brd-lightblue-v3 g-bg-lightblue-v3 g-font-size-default g-color-white g-rounded-50 g-py-4 g-px-15">approved</span>
            </td>
            <td class="g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">Dec 20, 2016</td>
            <td class="text-right g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">$9562</td>
          </tr>

          <tr>
            <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom--md g-brd-2 g-brd-gray-light-v4 g-py-10 g-pl-20">10</td>
            <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom--md g-brd-2 g-brd-gray-light-v4 g-py-10">Truck Advertising</td>
            <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom--md g-brd-2 g-brd-gray-light-v4 g-py-10">
              <span class="u-tags-v1 text-center g-width-100 g-brd-around g-brd-teal-v2 g-bg-teal-v2 g-font-size-default g-color-white g-rounded-50 g-py-4 g-px-15">done</span>
            </td>
            <td class="g-valign-middle g-brd-top-none g-brd-bottom--md g-brd-2 g-brd-gray-light-v4 g-py-10">Dec 24, 2016</td>
            <td class="text-right g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom--md g-brd-2 g-brd-gray-light-v4 g-py-10">$5470</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="js-area-chart u-area-chart--v1 g-pos-rel g-line-height-0" data-height="65px" data-high="2420" data-low="0" data-offset-x="0" data-offset-y="0" data-postfix=" m" data-is-show-area="true" data-is-show-line="false" data-is-show-point="true" data-is-full-width="true"
    data-is-stack-bars="true" data-is-show-axis-x="false" data-is-show-axis-y="false" data-is-show-tooltips="true" data-tooltip-description-position="left" data-tooltip-custom-class="u-tooltip--v2 g-font-weight-300 g-font-size-default g-color-gray-dark-v6"
    data-align-text-axis-x="center" data-fill-opacity="1" data-fill-colors='["#67c8d8"]' data-stroke-color="#e1eaea" data-stroke-dash-array="0" data-text-size-x="14px" data-text-color-x="#000000" data-text-offset-top-x="0" data-text-size-y="14px"
    data-text-color-y="#53585e" data-points-colors='["#1cc9e4"]' data-series='[
        [
          {"meta": "$", "value": 100},
          {"meta": "$", "value": 2100},
          {"meta": "$", "value": 350},
          {"meta": "$", "value": 2920},
          {"meta": "$", "value": 840},
          {"meta": "$", "value": 2770}
        ]
		]' data-labels='["2013", "2014", "2015", "2016", "2017"]'></div>
</div>
<!-- End Income Cards -->

<div class="modal fade" id="modal9" tabindex="-1" role="dialog" aria-labelledby="modal9Label" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class=" modal-header mx-auto" style="background: black;margin-top: 10px;color:white;">
        <h1 class="modal-title " id="exampleModalLabel">NUEVO RECADO</h1>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: white;">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<div class="thank-you-pop">
      		<form id="form_recado" method="POST" onsubmit="return guardar_recado(this);">
      		<h3 class="g-mb-0">Técnico:</h3>
	        <select name="tecnico" required style="height: 3em" class="custom-select w-100 u-select-v2 u-shadow-v19  g-color-black g-color-success--hover g-bg-white text-left g-rounded-30 g-pl-30 g-py-12" data-placeholder="Técnico" data-open-icon="fa fa-angle-down" data-close-icon="fa fa-angle-up">
	        	<option selected="" disabled value="">Listado de Técnicos</option>
	        	<?php foreach ($tecnicos as $tecnico): ?>
	        		<option value="<?php echo $tecnico->id_tecnico; ?>"><?php echo $tecnico->nombre.' '.$tecnico->apellidoP; ?></option>
	        	<?php endforeach ?>
	        	
	        </select>
	        <h3 class="g-mb-0">Cliente:</h3>
	        <div id="custom-search-input">
                <div class="input-group">
                    <input id="cliente" name="cliente" type="text" class="form-control u-shadow-v19 g-bg-white g-font-size-16 g-rounded-30 g-px-30 g-py-13" placeholder="Nombre del cliente" />
                </div>
            </div>
	        <h3 class="g-mb-0 g-mt-0">Telefono del cliente:</h3>
	        <input name="tel_cliente" type="text" class="form-control g-color-black g-rounded-30 u-shadow-v19  g-bg-white g-font-size-16 g-rounded-30 g-px-30 g-py-13 " id="Telefono" placeholder="Telefono">
	        <!-- Textarea Expandable -->
			<div class="form-group g-mb-20">
				<h3 class="g-mb-0" for="inputGroup2_2">Asunto</h3>
				<textarea name="asunto" required id="inputGroup2_3" class="form-control form-control-md u-textarea-expandable g-rounded-30" rows="3" placeholder="Recado..." style="white-space: break-spaces"></textarea>
				<div class="form-group g-mb-20">
					<div class="col-md-12 row">
						<h3 class="col-md-6 " for="inputGroup2_2">Notificar por:</h3>	
					  	<!-- Checkboxes Group -->
					  	<div class="btn-group justified-content">
					    	<label class="u-check g-pl-0">
					      		<input name="noti_whatsapp" id="noti_whatsapp" class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox" value="SI">
					      		<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked rounded-0">
					      			<i class="fa fa-whatsapp g-color-green u-line-icon-pro"></i>
									Whatsapp
								</span>
					    	</label>
					    	<label class="u-check g-pl-0">
					      		<input name="noti_correo" id="noti_correo" class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox" value="SI">
				      			<span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked g-brd-left-none--md rounded-0">						  
				      				<i class="icon-communication-025 g-color-red u-line-icon-pro"></i>
									Correo electronico
								</span>
					    	</label>
					  	</div>
					  	<!-- End Checkboxes Group -->
					</div>
				</div>
				<small class="form-text text-muted g-font-size-default g-mt-10">
			    	<strong>Se registrará con la fecha:</strong><?php echo date('d-m-Y',time()); ?>
			    </small>
			</div>
			</form>
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" form="form_recado" class="btn btn-info">Enviar</button>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
	Notification.requestPermission()
	  .then(() => navigator.serviceWorker.register('<?php echo base_url('assets/js/');?>service-worker.js').then(registration => {
  registration.pushManager.subscribe({userVisibleOnly: true}).then(subscription => {
    console.log(subscription.endpoint)
})
}));

     // var notification = new Notification("Holiwis :D");

	// window.addEventListener('load', function () {
  // Primero, comprobamos si tenemos permiso para lanzar notificaciones
  // Si no lo tenemos, lo pedimos
  // if (window.Notification && Notification.permission !== "granted") {
  //   Notification.requestPermission(function (status) {
  //     if (Notification.permission !== status) {
  //       Notification.permission = status;
  //     }
  //   });
  // }});
// $(document).ready(function() {
//   // Comprobamos si el navegador soporta las notificaciones
//   if (!("Notification" in window)) {
//     alert("Este navegador no soporta las notificaciones del sistema");
//   }

//   // Comprobamos si ya nos habían dado permiso
//   else if (Notification.permission === "granted") {
//     // Si esta correcto lanzamos la notificación
//     var notification = new Notification("Holiwis :D");
//   }

//   // Si no, tendremos que pedir permiso al usuario
//   else if (Notification.permission !== 'denied') {
//     Notification.requestPermission(function (permission) {
//       // Si el usuario acepta, lanzamos la notificación
//       if (permission === "granted") {
//         var notification = new Notification("Gracias majo!");
//       }
//     });
//   }
//   // Finalmente, si el usuario te ha denegado el permiso y 
//   // quieres ser respetuoso no hay necesidad molestar más.
// });

	guardar_recado = function(element){
		console.log('element');
		var xhttp = new XMLHttpRequest();

		xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				// document.getElementById("demo").innerHTML = this.responseText;
				var contenedorPrincipal = document.getElementById('container-tablaRecados');
				// document.getElementById('modal9').modal('hide');
				$("#modal9").modal("hide");
				document.getElementById("container-tablaRecados").innerHTML = this.responseText;
			}
		};
		xhttp.open("POST", "<?php echo base_url('digital/Recados/guardar_recado'); ?>", true);
	    var myForm = document.getElementById("form_recado");
		var formData = new FormData(myForm);
		var correo = document.getElementById("noti_correo").checked; 
		var whatsapp = document.getElementById("noti_whatsapp").checked; 
		if (correo==true){correo='SI';}else{correo='NO';}
		if (whatsapp==true){whatsapp='SI';}else{whatsapp='NO';}
		formData.append('notificacion_correo',correo);
		formData.append('notificacion_whatsapp',whatsapp);
		xhttp.send(formData);
		return false;
	}
</script>