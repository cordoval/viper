<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('viper_company/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          &nbsp;<a href="<?php echo url_for('viper_company/index') ?>">Back to list</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'viper_company/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><?php echo $form['name']->renderLabel() ?></th>
        <td>
          <?php echo $form['name']->renderError() ?>
          <?php echo $form['name'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['address']->renderLabel() ?></th>
        <td>
          <?php echo $form['address']->renderError() ?>
          <?php echo $form['address'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['phone_number']->renderLabel() ?></th>
        <td>
          <?php echo $form['phone_number']->renderError() ?>
          <?php echo $form['phone_number'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['fax_number']->renderLabel() ?></th>
        <td>
          <?php echo $form['fax_number']->renderError() ?>
          <?php echo $form['fax_number'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['homepage']->renderLabel() ?></th>
        <td>
          <?php echo $form['homepage']->renderError() ?>
          <?php echo $form['homepage'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
