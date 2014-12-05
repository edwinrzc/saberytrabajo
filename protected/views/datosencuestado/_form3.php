<?php
/* @var $this PosesionesviviendaController */
/* @var $model Posesionesvivienda */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'posesionesvivienda-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>
<div class="row">
	<table class="tabla-int" >
		<tr>
			<th colspan="3" >Posesiones en Vivienda</th>
		</tr>
		<tr>
			<td colspan="3">
				<table>
					<tr>
						<td colspan="2" >
							Articulos de Linea Blanca
						</td>
					</tr>
					<tr>
						<td width="50%">
							<?php echo $form->labelEx($model,'can_coc_pos_viv'); ?>
							<input type="hidden" name="action" value="PV" />
							<input type="hidden" name="Posesionesvivienda[cod_dp_enc]" value="<?php echo $id;?>" />
						</td>
						<td >
							<?php echo $form->textField($model,'can_coc_pos_viv'); ?>
							<?php echo $form->error($model,'can_coc_pos_viv'); ?>
						</td>
					</tr>
					<tr>
						<td width="50%" >
							<?php echo $form->labelEx($model,'can_lav_pos_viv'); ?>
						</td>
						<td>
							<?php echo $form->textField($model,'can_lav_pos_viv'); ?>
							<?php echo $form->error($model,'can_lav_pos_viv'); ?>
						</td>
					</tr>
					<tr>
						<td width="50%" >
							<?php echo $form->labelEx($model,'can_nev_pos_viv'); ?>
						</td>
						<td>
							<?php echo $form->textField($model,'can_nev_pos_viv'); ?>
							<?php echo $form->error($model,'can_nev_pos_viv'); ?>
						</td>
					</tr>
					<tr>
						<td width="50%" >
							<?php echo $form->labelEx($model,'can_sec_pos_viv'); ?>
						</td>
						<td>
							<?php echo $form->textField($model,'can_sec_pos_viv'); ?>
							<?php echo $form->error($model,'can_sec_pos_viv'); ?>
						</td>
					</tr>
					<tr>
						<td width="50%" >
							<?php echo $form->labelEx($model,'can_air_aco_pos_viv'); ?>
						</td>
						<td>
							<?php echo $form->textField($model,'can_air_aco_pos_viv'); ?>
							<?php echo $form->error($model,'can_air_aco_pos_viv'); ?>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td colspan="3">
				<table>
					<tr>
						<td colspan="2" >
							Articulos de Linea Marron
						</td>
					</tr>
					<tr>
						<td width="50%" >
							<?php echo $form->labelEx($model,'can_cam_ind_pos_viv'); ?>
						</td>
						<td>
							<?php echo $form->textField($model,'can_cam_ind_pos_viv'); ?>
							<?php echo $form->error($model,'can_cam_ind_pos_viv'); ?>
						</td>
					</tr>
					<tr>
						<td width="50%" >
							<?php echo $form->labelEx($model,'can_cam_mat_pos_viv'); ?>
						</td>
						<td>
							<?php echo $form->textField($model,'can_cam_mat_pos_viv'); ?>
							<?php echo $form->error($model,'can_cam_mat_pos_viv'); ?>
						</td>
					</tr>
					<tr>
						<td width="50%" >
							<?php echo $form->labelEx($model,'can_lit_pos_viv'); ?>
						</td>
						<td>
							<?php echo $form->textField($model,'can_lit_pos_viv'); ?>
							<?php echo $form->error($model,'can_lit_pos_viv'); ?>
						</td>
					</tr>
					<tr>
						<td width="50%" >
							<?php echo $form->labelEx($model,'can_col_ind_pos_viv'); ?>
						</td>
						<td>
							<?php echo $form->textField($model,'can_col_ind_pos_viv'); ?>
							<?php echo $form->error($model,'can_col_ind_pos_viv'); ?>
						</td>
					</tr>
					<tr>
						<td width="50%" >
							<?php echo $form->labelEx($model,'can_col_mat_pos_viv'); ?>
						</td>
						<td>
							<?php echo $form->textField($model,'can_col_mat_pos_viv'); ?>
							<?php echo $form->error($model,'can_col_mat_pos_viv'); ?>
						</td>
					</tr>
					<tr>
						<td width="50%" >
							<?php echo $form->labelEx($model,'can_jue_com_pos_viv'); ?>
						</td>
						<td>
							<?php echo $form->textField($model,'can_jue_com_pos_viv'); ?>
							<?php echo $form->error($model,'can_jue_com_pos_viv'); ?>
						</td>
					</tr>
					<tr>
						<td width="50%" >
							<?php echo $form->labelEx($model,'can_jue_rec_pos_viv'); ?>
						</td>
						<td>
							<?php echo $form->textField($model,'can_jue_rec_pos_viv'); ?>
							<?php echo $form->error($model,'can_jue_rec_pos_viv'); ?>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
</div>
<div class="row buttons">
	<?php echo CHtml::Button($model->isNewRecord ? 'Registrar' : 'Guardar',array('id'=>'btn-posesiones-vivienda', 'class'=>'small blue nice button radius')); ?>
</div>

<?php $this->endWidget(); ?>

</div><!-- form -->