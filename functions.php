 $get_parentcats = get_terms(array('taxonomy' => 'category'), array('parent' => 0, 'hide_empty' => true));
  foreach ($get_parentcats as $single_parent) {
      $term_id = $single_parent->term_id
  ?>
      <p><?php echo $single_parent->name; ?></p>
      <?php
      $get_child_cats = get_terms(array('taxonomy' => 'category'), array('parent' => $term_id, 'hide_empty' => true));
      foreach ($get_child_cats as $single_child) {
      ?>
          <li><?php echo $single_child->name; ?></li>
      <?php
      }
  }
