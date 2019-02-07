<?php
  /*
    Template Name: Project Page
  */

  get_header();

  /*
    $selectedProjectManager = isset($_GET['project_manager']) ? $_GET['project_manager'] : '';
    $selectedService = isset($_GET['service']) ? $_GET['service'] : '';
    $args = [
      'meta_query' => [
        'relation' => 'OR',
        [
          'key' => 'services',
          'value' => $selectedService,
          'compare' => 'LIKE'
        ],
        [
          'key' => 'project_manager',
          'value' => $selectedProjectManager,
          'compare' => 'LIKE'
        ]
      ]
    ];
  */

  $args = [];
  if (isset($_GET['project_manager']) && $_GET['project_manager'] !== '') {
    if (!isset($args['meta_query'])) $args['meta_query'] = [];
    $args['meta_query'][] = [
      'key' => 'project_manager',
      'value' => $_GET['project_manager'],
      'compare' => 'LIKE'
    ];
    if (count($args['meta_query']) > 1) $args['meta_query']['relation'] = 'AND';
  }
  if (isset($_GET['service']) && $_GET['service'] !== '') {
    if (!isset($args['meta_query'])) $args['meta_query'] = [];
    $args['meta_query'][] = [
      'key' => 'services',
      'value' => $_GET['service'],
      'compare' => 'LIKE'
    ];
    if (count($args['meta_query']) > 1) $args['meta_query']['relation'] = 'AND';
  }

  $projects = get_posts($args);

  $serviceList = get_field_object('services', $projects[0]->ID);
?>

<form method="GET">
  <input type="search" name="project_manager" placeholder="Name of project manager..">
  <select name="service">
    <?php foreach ($serviceList['choices'] as $value => $label): ?>
      <option value="<?= $value; ?>" <?php if ($value === $selectedService) echo 'selected'; ?>><?= $label; ?></option>
    <?php endforeach; ?>
  </select>
  <input type="submit" value="Filter projects">
</form>

<?php foreach ($projects as $project): ?>
  <?php
    $fields = get_fields($project->ID); // Will get all fields on a particular post object.
    $services = get_field('services', $project->ID); // Will get one specific field on a particular post 
  ?>
  <div class="project">
    <h3><?= $project->post_title; ?></h3>
    <ul>
      <?php foreach ($services as $service): ?>
        <li><?= $service['label']; ?></li>
      <?php endforeach; ?>
    </ul>
    <?php if (isset($fields['project_manager'])): ?>
      <p>Project manager: <?= $fields['project_manager']; ?></p>
    <?php endif; ?>
    <?= $project->post_content; ?>
  </div>
<?php endforeach; ?>

<?php get_footer(); ?>