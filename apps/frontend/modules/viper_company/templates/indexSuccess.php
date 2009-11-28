<h1>ViperCompanys List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Slug</th>
      <th>Address</th>
      <th>Phone number</th>
      <th>Fax number</th>
      <th>Homepage</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($ViperCompanys as $ViperCompany): ?>
    <tr>
      <td><a href="<?php echo url_for('viper_company/show?id='.$ViperCompany->getId()) ?>"><?php echo $ViperCompany->getId() ?></a></td>
      <td><?php echo $ViperCompany->getName() ?></td>
      <td><?php echo $ViperCompany->getSlug() ?></td>
      <td><?php echo $ViperCompany->getAddress() ?></td>
      <td><?php echo $ViperCompany->getPhoneNumber() ?></td>
      <td><?php echo $ViperCompany->getFaxNumber() ?></td>
      <td><?php echo $ViperCompany->getHomepage() ?></td>
      <td><?php echo $ViperCompany->getCreatedAt() ?></td>
      <td><?php echo $ViperCompany->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('viper_company/new') ?>">New</a>
