<?php
/**
 * @var \App\View\AppView $this
 */
?>
<div class="row">

	<div class="col-xs-12">

<h2>Welcome</h2>
<p>You need to login to proceed.</p>

<?php echo $this->Form->create();?>

<h3>Please enter your name and password below.</h3>

	<?php
		echo $this->Form->control('login', ['label' => 'Your name']);
		echo $this->Form->control('password', ['autocomplete' => 'off']);

		//TODO: Cookie remember me
		if ($this->Configure->read('Config.rememberMe')) {
			echo $this->Form->control('RememberMe.confirm', ['type' => 'checkbox', 'label' => __('Remember me on this device.')]);
		}
	?>

<?php echo $this->Form->submit(__('Log me in')); echo $this->Form->end();?>

</div>
