<section class="stats">
    <div class="stat-card">
        <span class="stat-value"><?= $countStudents ?? 0 ?></span>
        <span class="stat-label">АСПИРАНТОВ</span>
    </div>
    <div class="stat-card">
        <span class="stat-value"><?= $countPublications ?? 0 ?></span>
        <span class="stat-label">ПУБЛИКАЦИЙ</span>
    </div>
    <div class="stat-card">
        <span class="stat-value"><?= $countDefenses ?? 0 ?></span>
        <span class="stat-label">ЗАЩИТ В ЭТОМ ГОДУ</span>
    </div>
    <div class="stat-card">
        <span class="stat-value"><?= $countSupervisors ?? 0 ?></span>
        <span class="stat-label">НАУЧНЫХ РУКОВОДИТЕЛЕЙ</span>
    </div>
</section>

<section class="actions">
    <h2 class="section-title">Быстрые действия</h2>
    <div class="actions-grid">
        <a href="/up_1-master/public/students/create" class="action-btn">
            <span class="action-icon">+</span>
            <span>Добавить аспиранта</span>
        </a>
        <a href="#" class="action-btn">
            <span class="action-icon">📄</span>
            <span>Добавить публикацию</span>
        </a>
        <a href="#" class="action-btn">
            <span class="action-icon">📊</span>
            <span>Сформировать отчет</span>
        </a>
    </div>
</section>