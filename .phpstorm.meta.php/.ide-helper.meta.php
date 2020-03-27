<?php
// @link https://confluence.jetbrains.com/display/PhpStorm/PhpStorm+Advanced+Metadata
namespace PHPSTORM_META {

	override(
		\Cake\Controller\Controller::loadComponent(0),
		map([
			'Auth' => \Cake\Controller\Component\AuthComponent::class,
			'Authentication.Authentication' => \Authentication\Controller\Component\AuthenticationComponent::class,
			'Authorization.Authorization' => \Authorization\Controller\Component\AuthorizationComponent::class,
			'Flash' => \Cake\Controller\Component\FlashComponent::class,
			'FormProtection' => \Cake\Controller\Component\FormProtectionComponent::class,
			'Paginator' => \Cake\Controller\Component\PaginatorComponent::class,
			'RequestHandler' => \Cake\Controller\Component\RequestHandlerComponent::class,
			'Security' => \Cake\Controller\Component\SecurityComponent::class,
			'Setup.Setup' => \Setup\Controller\Component\SetupComponent::class,
			'TinyAuth.Auth' => \TinyAuth\Controller\Component\AuthComponent::class,
			'TinyAuth.AuthUser' => \TinyAuth\Controller\Component\AuthUserComponent::class,
			'TinyAuth.Authentication' => \TinyAuth\Controller\Component\AuthenticationComponent::class,
			'TinyAuth.Authorization' => \TinyAuth\Controller\Component\AuthorizationComponent::class,
			'Tools.Common' => \Tools\Controller\Component\CommonComponent::class,
			'Tools.Mobile' => \Tools\Controller\Component\MobileComponent::class,
			'Tools.RefererRedirect' => \Tools\Controller\Component\RefererRedirectComponent::class,
			'Tools.Url' => \Tools\Controller\Component\UrlComponent::class,
		])
	);

	override(
		\Cake\Core\PluginApplicationInterface::addPlugin(0),
		map([
			'Authentication' => \Cake\Http\BaseApplication::class,
			'Authorization' => \Cake\Http\BaseApplication::class,
			'Bake' => \Cake\Http\BaseApplication::class,
			'DebugKit' => \Cake\Http\BaseApplication::class,
			'IdeHelper' => \Cake\Http\BaseApplication::class,
			'Migrations' => \Cake\Http\BaseApplication::class,
			'Setup' => \Cake\Http\BaseApplication::class,
			'Shim' => \Cake\Http\BaseApplication::class,
			'TinyAuth' => \Cake\Http\BaseApplication::class,
			'Tools' => \Cake\Http\BaseApplication::class,
			'WyriHaximus/TwigView' => \Cake\Http\BaseApplication::class,
		])
	);

	override(
		\Cake\Database\Type::build(0),
		map([
			'biginteger' => \Cake\Database\Type\IntegerType::class,
			'binary' => \Cake\Database\Type\BinaryType::class,
			'binaryuuid' => \Cake\Database\Type\BinaryUuidType::class,
			'boolean' => \Cake\Database\Type\BoolType::class,
			'char' => \Cake\Database\Type\StringType::class,
			'date' => \Cake\Database\Type\DateType::class,
			'datetime' => \Cake\Database\Type\DateTimeType::class,
			'datetimefractional' => \Cake\Database\Type\DateTimeFractionalType::class,
			'decimal' => \Cake\Database\Type\DecimalType::class,
			'float' => \Cake\Database\Type\FloatType::class,
			'integer' => \Cake\Database\Type\IntegerType::class,
			'json' => \Cake\Database\Type\JsonType::class,
			'smallinteger' => \Cake\Database\Type\IntegerType::class,
			'string' => \Cake\Database\Type\StringType::class,
			'text' => \Cake\Database\Type\StringType::class,
			'time' => \Cake\Database\Type\TimeType::class,
			'timestamp' => \Cake\Database\Type\DateTimeType::class,
			'timestampfractional' => \Cake\Database\Type\DateTimeFractionalType::class,
			'timestamptimezone' => \Cake\Database\Type\DateTimeTimezoneType::class,
			'tinyinteger' => \Cake\Database\Type\IntegerType::class,
			'uuid' => \Cake\Database\Type\UuidType::class,
		])
	);

	override(
		\Cake\Datasource\ModelAwareTrait::loadModel(0),
		map([
			'Articles' => \App\Model\Table\ArticlesTable::class,
			'DebugKit.Panels' => \DebugKit\Model\Table\PanelsTable::class,
			'DebugKit.Requests' => \DebugKit\Model\Table\RequestsTable::class,
			'Posts' => \App\Model\Table\PostsTable::class,
			'Tools.Tokens' => \Tools\Model\Table\TokensTable::class,
			'Users' => \App\Model\Table\UsersTable::class,
		])
	);

	override(
		\Cake\Datasource\QueryInterface::find(0),
		map([
			'all' => \Cake\ORM\Query::class,
			'list' => \Cake\ORM\Query::class,
			'threaded' => \Cake\ORM\Query::class,
		])
	);

	override(
		\Cake\ORM\Association::find(0),
		map([
			'all' => \Cake\ORM\Query::class,
			'list' => \Cake\ORM\Query::class,
			'threaded' => \Cake\ORM\Query::class,
		])
	);

	override(
		\Cake\ORM\Locator\LocatorInterface::get(0),
		map([
			'Articles' => \App\Model\Table\ArticlesTable::class,
			'DebugKit.Panels' => \DebugKit\Model\Table\PanelsTable::class,
			'DebugKit.Requests' => \DebugKit\Model\Table\RequestsTable::class,
			'Posts' => \App\Model\Table\PostsTable::class,
			'Tools.Tokens' => \Tools\Model\Table\TokensTable::class,
			'Users' => \App\Model\Table\UsersTable::class,
		])
	);

	override(
		\Cake\ORM\Table::addBehavior(0),
		map([
			'CounterCache' => \Cake\ORM\Table::class,
			'DebugKit.Timed' => \Cake\ORM\Table::class,
			'Timestamp' => \Cake\ORM\Table::class,
			'Tools.AfterSave' => \Cake\ORM\Table::class,
			'Tools.Bitmasked' => \Cake\ORM\Table::class,
			'Tools.Confirmable' => \Cake\ORM\Table::class,
			'Tools.Jsonable' => \Cake\ORM\Table::class,
			'Tools.Neighbor' => \Cake\ORM\Table::class,
			'Tools.Passwordable' => \Cake\ORM\Table::class,
			'Tools.Reset' => \Cake\ORM\Table::class,
			'Tools.Slugged' => \Cake\ORM\Table::class,
			'Tools.String' => \Cake\ORM\Table::class,
			'Tools.Toggle' => \Cake\ORM\Table::class,
			'Tools.TypeMap' => \Cake\ORM\Table::class,
			'Tools.Typographic' => \Cake\ORM\Table::class,
			'Translate' => \Cake\ORM\Table::class,
			'Tree' => \Cake\ORM\Table::class,
		])
	);

	override(
		\Cake\ORM\Table::belongToMany(0),
		map([
			'Articles' => \Cake\ORM\Association\BelongsToMany::class,
			'DebugKit.Panels' => \Cake\ORM\Association\BelongsToMany::class,
			'DebugKit.Requests' => \Cake\ORM\Association\BelongsToMany::class,
			'Posts' => \Cake\ORM\Association\BelongsToMany::class,
			'Tools.Tokens' => \Cake\ORM\Association\BelongsToMany::class,
			'Users' => \Cake\ORM\Association\BelongsToMany::class,
		])
	);

	override(
		\Cake\ORM\Table::belongsTo(0),
		map([
			'Articles' => \Cake\ORM\Association\BelongsTo::class,
			'DebugKit.Panels' => \Cake\ORM\Association\BelongsTo::class,
			'DebugKit.Requests' => \Cake\ORM\Association\BelongsTo::class,
			'Posts' => \Cake\ORM\Association\BelongsTo::class,
			'Tools.Tokens' => \Cake\ORM\Association\BelongsTo::class,
			'Users' => \Cake\ORM\Association\BelongsTo::class,
		])
	);

	override(
		\Cake\ORM\Table::find(0),
		map([
			'all' => \Cake\ORM\Query::class,
			'list' => \Cake\ORM\Query::class,
			'threaded' => \Cake\ORM\Query::class,
		])
	);

	override(
		\Cake\ORM\Table::hasMany(0),
		map([
			'Articles' => \Cake\ORM\Association\HasMany::class,
			'DebugKit.Panels' => \Cake\ORM\Association\HasMany::class,
			'DebugKit.Requests' => \Cake\ORM\Association\HasMany::class,
			'Posts' => \Cake\ORM\Association\HasMany::class,
			'Tools.Tokens' => \Cake\ORM\Association\HasMany::class,
			'Users' => \Cake\ORM\Association\HasMany::class,
		])
	);

	override(
		\Cake\ORM\Table::hasOne(0),
		map([
			'Articles' => \Cake\ORM\Association\HasOne::class,
			'DebugKit.Panels' => \Cake\ORM\Association\HasOne::class,
			'DebugKit.Requests' => \Cake\ORM\Association\HasOne::class,
			'Posts' => \Cake\ORM\Association\HasOne::class,
			'Tools.Tokens' => \Cake\ORM\Association\HasOne::class,
			'Users' => \Cake\ORM\Association\HasOne::class,
		])
	);

	override(
		\Cake\ORM\TableRegistry::get(0),
		map([
			'Articles' => \App\Model\Table\ArticlesTable::class,
			'DebugKit.Panels' => \DebugKit\Model\Table\PanelsTable::class,
			'DebugKit.Requests' => \DebugKit\Model\Table\RequestsTable::class,
			'Posts' => \App\Model\Table\PostsTable::class,
			'Tools.Tokens' => \Tools\Model\Table\TokensTable::class,
			'Users' => \App\Model\Table\UsersTable::class,
		])
	);

	expectedArguments(
		\Cake\Routing\Router::pathUrl(),
		0,
		'Account::action',
		'Articles::action',
		'Cars::action',
		'DebugKit.Composer::action',
		'DebugKit.Dashboard::action',
		'DebugKit.DebugKit::action',
		'DebugKit.MailPreview::action',
		'DebugKit.Panels::action',
		'DebugKit.Requests::action',
		'DebugKit.Toolbar::action',
		'Error::action',
		'Pages::action',
		'Posts::action',
		'Setup.Backend::action',
		'Setup.Database::action',
		'Setup.Setup::action',
		'Tools.ShuntRequest::action',
		'Users::action'
	);

	expectedArguments(
		\Cake\Validation\Validator::requirePresence(),
		1,
		'create',
		'update'
	);

	override(
		\Cake\View\View::element(0),
		map([
			'DebugKit.cache_panel' => \Cake\View\View::class,
			'DebugKit.deprecations_panel' => \Cake\View\View::class,
			'DebugKit.environment_panel' => \Cake\View\View::class,
			'DebugKit.history_panel' => \Cake\View\View::class,
			'DebugKit.include_panel' => \Cake\View\View::class,
			'DebugKit.log_panel' => \Cake\View\View::class,
			'DebugKit.mail_panel' => \Cake\View\View::class,
			'DebugKit.packages_panel' => \Cake\View\View::class,
			'DebugKit.preview_header' => \Cake\View\View::class,
			'DebugKit.request_panel' => \Cake\View\View::class,
			'DebugKit.routes_panel' => \Cake\View\View::class,
			'DebugKit.session_panel' => \Cake\View\View::class,
			'DebugKit.sql_log_panel' => \Cake\View\View::class,
			'DebugKit.timer_panel' => \Cake\View\View::class,
			'DebugKit.variables_panel' => \Cake\View\View::class,
			'TinyAuth.auth_panel' => \Cake\View\View::class,
			'Tools.pagination' => \Cake\View\View::class,
			'WyriHaximus/TwigView.twig_panel' => \Cake\View\View::class,
			'flash/default' => \Cake\View\View::class,
			'flash/error' => \Cake\View\View::class,
			'flash/success' => \Cake\View\View::class,
		])
	);

	override(
		\Cake\View\View::loadHelper(0),
		map([
			'Authentication.Identity' => \Authentication\View\Helper\IdentityHelper::class,
			'Bake.Bake' => \Bake\View\Helper\BakeHelper::class,
			'Bake.DocBlock' => \Bake\View\Helper\DocBlockHelper::class,
			'Breadcrumbs' => \Cake\View\Helper\BreadcrumbsHelper::class,
			'DebugKit.Credentials' => \DebugKit\View\Helper\CredentialsHelper::class,
			'DebugKit.SimpleGraph' => \DebugKit\View\Helper\SimpleGraphHelper::class,
			'DebugKit.Toolbar' => \DebugKit\View\Helper\ToolbarHelper::class,
			'Flash' => \Cake\View\Helper\FlashHelper::class,
			'Form' => \Cake\View\Helper\FormHelper::class,
			'Html' => \Cake\View\Helper\HtmlHelper::class,
			'IdeHelper.DocBlock' => \IdeHelper\View\Helper\DocBlockHelper::class,
			'Migrations.Migration' => \Migrations\View\Helper\MigrationHelper::class,
			'Number' => \Cake\View\Helper\NumberHelper::class,
			'Paginator' => \Cake\View\Helper\PaginatorHelper::class,
			'Text' => \Cake\View\Helper\TextHelper::class,
			'Time' => \Cake\View\Helper\TimeHelper::class,
			'TinyAuth.AuthUser' => \TinyAuth\View\Helper\AuthUserHelper::class,
			'TinyAuth.Authentication' => \TinyAuth\View\Helper\AuthenticationHelper::class,
			'Tools.Common' => \Tools\View\Helper\CommonHelper::class,
			'Tools.Form' => \Tools\View\Helper\FormHelper::class,
			'Tools.Format' => \Tools\View\Helper\FormatHelper::class,
			'Tools.Gravatar' => \Tools\View\Helper\GravatarHelper::class,
			'Tools.Html' => \Tools\View\Helper\HtmlHelper::class,
			'Tools.Meter' => \Tools\View\Helper\MeterHelper::class,
			'Tools.Number' => \Tools\View\Helper\NumberHelper::class,
			'Tools.Obfuscate' => \Tools\View\Helper\ObfuscateHelper::class,
			'Tools.Progress' => \Tools\View\Helper\ProgressHelper::class,
			'Tools.QrCode' => \Tools\View\Helper\QrCodeHelper::class,
			'Tools.Text' => \Tools\View\Helper\TextHelper::class,
			'Tools.Time' => \Tools\View\Helper\TimeHelper::class,
			'Tools.Timeline' => \Tools\View\Helper\TimelineHelper::class,
			'Tools.Tree' => \Tools\View\Helper\TreeHelper::class,
			'Tools.Typography' => \Tools\View\Helper\TypographyHelper::class,
			'Tools.Url' => \Tools\View\Helper\UrlHelper::class,
			'Url' => \Cake\View\Helper\UrlHelper::class,
		])
	);

}
