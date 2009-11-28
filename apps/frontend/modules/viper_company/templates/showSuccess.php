<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $ViperCompany->getId() ?></td>
    </tr>
    <tr>
      <th>Name:</th>
      <td><?php echo $ViperCompany->getName() ?></td>
    </tr>
    <tr>
      <th>Slug:</th>
      <td><?php echo $ViperCompany->getSlug() ?></td>
    </tr>
    <tr>
      <th>Address:</th>
      <td><?php echo $ViperCompany->getAddress() ?></td>
    </tr>
    <tr>
      <th>Phone number:</th>
      <td><?php echo $ViperCompany->getPhoneNumber() ?></td>
    </tr>
    <tr>
      <th>Fax number:</th>
      <td><?php echo $ViperCompany->getFaxNumber() ?></td>
    </tr>
    <tr>
      <th>Homepage:</th>
      <td><?php echo $ViperCompany->getHomepage() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $ViperCompany->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $ViperCompany->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('viper_company/edit?id='.$ViperCompany->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('viper_company/index') ?>">List</a>
