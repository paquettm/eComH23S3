<?php $this->view('shared/header','Your Profile'); ?>
<dl>
    <dt>First Name</dt>
    <dd><?= $data->first_name?></dd>
    <dt>Last Name</dt>
    <dd><?= $data->last_name?></dd>
    <dt>Middle Name</dt>
    <dd><?= $data->middle_name?></dd>
    <dd><img src="/eComH23S3/app/images/<?= $data->picture?>"></dd>
</dl>

<a href="/eComH23S3/Profile/edit">Edit my profile</a>
<a href="/eComH23S3/User/profile">Back</a>

<?php $this->view('shared/footer'); ?>