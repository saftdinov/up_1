<div class="container" style="padding: 40px 20px;">
    <div style="max-width: 1200px; margin: 0 auto;">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px;">
            <h1 style="color: #2d3748; margin: 0;">Список аспирантов</h1>
            <a href="/up_1-master/public/students/create"
               style="padding: 12px 24px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; text-decoration: none; border-radius: 8px; font-weight: 600;">
                + Добавить аспиранта
            </a>
        </div>

        <?php if ($students->isEmpty()): ?>
            <div style="background: white; padding: 40px; border-radius: 12px; text-align: center; box-shadow: 0 2px 8px rgba(0,0,0,0.04);">
                <p style="color: #7a8c9f; font-size: 16px;">Аспиранты пока не добавлены</p>
                <a href="/up_1-master/public/students/create"
                   style="display: inline-block; margin-top: 16px; padding: 12px 24px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; text-decoration: none; border-radius: 8px; font-weight: 600;">
                    Добавить первого аспиранта
                </a>
            </div>
        <?php else: ?>
            <div style="background: white; border-radius: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.04); overflow: hidden;">
                <table style="width: 100%; border-collapse: collapse;">
                    <thead style="background: #f8f9fc; border-bottom: 2px solid #eef2f7;">
                    <tr>
                        <th style="padding: 16px; text-align: left; color: #5a6c84; font-weight: 600;">ФИО</th>
                        <th style="padding: 16px; text-align: left; color: #5a6c84; font-weight: 600;">Кафедра</th>
                        <th style="padding: 16px; text-align: left; color: #5a6c84; font-weight: 600;">Научный руководитель</th>
                        <th style="padding: 16px; text-align: left; color: #5a6c84; font-weight: 600;">Дата зачисления</th>
                        <th style="padding: 16px; text-align: left; color: #5a6c84; font-weight: 600;">Действия</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($students as $student): ?>
                        <tr style="border-bottom: 1px solid #eef2f7;">
                            <td style="padding: 16px; color: #2d3748;">
                                <?= htmlspecialchars($student->Full_name) ?>
                            </td>
                            <td style="padding: 16px; color: #5a6c84;">
                                <?= htmlspecialchars($student->Department ?? 'Не указана') ?>
                            </td>
                            <td style="padding: 16px; color: #5a6c84;">
                                <?php if ($student->supervisor): ?>
                                    <?= htmlspecialchars($student->supervisor->Full_Name) ?>
                                    <?php if ($student->supervisor->Degree_Title): ?>
                                        <span style="color: #7a8c9f; font-size: 13px;">
                                                (<?= htmlspecialchars($student->supervisor->Degree_Title) ?>)
                                            </span>
                                    <?php endif; ?>
                                <?php else: ?>
                                    <span style="color: #7a8c9f;">Не назначен</span>
                                <?php endif; ?>
                            </td>
                            <td style="padding: 16px; color: #5a6c84;">
                                <?= $student->enrollment_date ? date('d.m.Y', strtotime($student->enrollment_date)) : 'Не указана' ?>
                            </td>
                            <td style="padding: 16px;">
                                <a href="/up_1-master/public/students/<?= $student->{"Graduate student_ID"} ?>/edit"
                                   style="color: #667eea; text-decoration: none; margin-right: 12px;">
                                    Редактировать
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php endif; ?>
    </div>
</div>