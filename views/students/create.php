<div class="container" style="padding: 40px 20px;">
    <div style="max-width: 800px; margin: 0 auto;">
        <h1 style="margin-bottom: 30px; color: #2d3748;">Добавление аспиранта</h1>

        <?php if (isset($errors) && !empty($errors)): ?>
            <div style="background: #fee; border: 1px solid #fcc; color: #c00; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
                <ul style="margin: 0; padding-left: 20px;">
                    <?php foreach ($errors as $field => $fieldErrors): ?>
                        <?php foreach ($fieldErrors as $error): ?>
                            <li><?= $error ?></li>
                        <?php endforeach; ?>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <form method="POST" action="/up_1-master/public/students" style="background: white; padding: 30px; border-radius: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.04);">
            <div style="margin-bottom: 20px;">
                <label style="display: block; margin-bottom: 8px; font-weight: 500; color: #5a6c84;">
                    ФИО аспиранта *
                </label>
                <input
                        type="text"
                        name="full_name"
                        value="<?= $old['full_name'] ?? '' ?>"
                        style="width: 100%; padding: 12px; border: 2px solid #e0e0e0; border-radius: 8px; font-size: 15px;"
                        required
                >
            </div>

            <div style="margin-bottom: 20px;">
                <label style="display: block; margin-bottom: 8px; font-weight: 500; color: #5a6c84;">
                    Кафедра/Отдел *
                </label>
                <input
                        type="text"
                        name="department"
                        value="<?= $old['department'] ?? '' ?>"
                        style="width: 100%; padding: 12px; border: 2px solid #e0e0e0; border-radius: 8px; font-size: 15px;"
                        required
                >
            </div>

            <div style="margin-bottom: 20px;">
                <label style="display: block; margin-bottom: 8px; font-weight: 500; color: #5a6c84;">
                    Дата зачисления *
                </label>
                <input
                        type="date"
                        name="enrollment_date"
                        value="<?= $old['enrollment_date'] ?? '' ?>"
                        style="width: 100%; padding: 12px; border: 2px solid #e0e0e0; border-radius: 8px; font-size: 15px;"
                        required
                >
            </div>

            <div style="margin-bottom: 20px;">
                <label style="display: block; margin-bottom: 8px; font-weight: 500; color: #5a6c84;">
                    Научный руководитель *
                </label>
                <select
                        name="manager_id"
                        style="width: 100%; padding: 12px; border: 2px solid #e0e0e0; border-radius: 8px; font-size: 15px;"
                        required
                >
                    <option value="">Выберите руководителя</option>
                    <?php foreach ($supervisors as $supervisor): ?>
                        <option value="<?= $supervisor->Manager_ID ?>">
                            <?= $supervisor->Full_Name ?> <?= $supervisor->Degree_Title ? '(' . $supervisor->Degree_Title . ')' : '' ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div style="display: flex; gap: 10px; margin-top: 30px;">
                <button
                        type="submit"
                        style="flex: 1; padding: 14px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; border: none; border-radius: 8px; font-size: 16px; font-weight: 600; cursor: pointer;"
                >
                    Добавить аспиранта
                </button>
                <a
                        href="/up_1-master/public/hello"
                        style="flex: 1; padding: 14px; background: #f8f9fc; color: #5a6c84; border: 2px solid #e0e0e0; border-radius: 8px; font-size: 16px; font-weight: 600; text-align: center; text-decoration: none;"
                >
                    Отмена
                </a>
            </div>
        </form>
    </div>
</div>