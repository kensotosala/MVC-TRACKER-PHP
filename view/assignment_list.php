<?php include('view/header.php'); ?>

<section id="list" class="list">
    <header class="list__row list__header">
        <h1>Assignments</h1>
        <form action="." method="get" id="list__header_select" class="list__header_select">
            <select name="course_id" required>
                <option value="0">View All</option>
                <?php foreach ($course_id as $course) : ?>
                    <option value="<?= $course['courseID'] ?>" <?= ($course_id == $course['courseID']) ? 'selected' : '' ?>>
                        <?= $course['courseName'] ?>
                    </option>
                <?php endforeach; ?>
            </select>
            <button class="add-button bold">Go</button>
        </form>
    </header>
</section>
<?php include('view/footer.php'); ?>