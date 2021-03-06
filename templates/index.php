<h2 class="content__main-heading">Список задач</h2>

                <form class="search-form" action="index.php" method="post" autocomplete="off">
                    <input class="search-form__input" type="text" name="" value="" placeholder="Поиск по задачам">

                    <input class="search-form__submit" type="submit" name="" value="Искать">
                </form>

                <div class="tasks-controls">
                    <nav class="tasks-switch">
                        <a href="/" class="tasks-switch__item tasks-switch__item--active">Все задачи</a>
                        <a href="/" class="tasks-switch__item">Повестка дня</a>
                        <a href="/" class="tasks-switch__item">Завтра</a>
                        <a href="/" class="tasks-switch__item">Просроченные</a>
                    </nav>

                    <label class="checkbox">
                        <input class="checkbox__input visually-hidden show_completed" type="checkbox" <?php if ( 1 === $showCompleteTasks ): ?>checked<?php endif; ?>>
                        <span class="checkbox__text">Показывать выполненные</span>
                    </label>
                </div>

                <table class="tasks">
                    <tr class="tasks__item task" >
                        <td class="task__select">
                            <span>Задача</span>
                        <td class="task__date">Дата выполнения</td>
                        <td class="task__date">Категория</td>
                        </td>
                    </tr>
                    <?php foreach ($tasks as $key =>  $item): ?>
                        <?php if (($item['completed'] === 0) || ($showCompleteTasks === 1)): ?>
                            <tr class="tasks__item task <?php if ($item['completed'] === 1): ?>task--completed<?endif; ?> <?php  if (checkExpirationDate($item['date']) === true): ?>task--important<?php endif; ?>">
                                <td class="task__select">
                                    <label class="checkbox task__checkbox">
                                        <input class="checkbox__input visually-hidden task__checkbox" type="checkbox" value="1" <?php if ($item['completed'] === 1): ?>checked<?endif ?>>
                                        <span class="checkbox__text"><?= htmlspecialchars($item['task_title']);?></span>
                                <td class="task__date"><?= strip_tags($item['date']);?></td>
                                <td class="task__date"><?= htmlspecialchars($item['project']);?></td>
                                </label>
                                </td>
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; ?>
                    </ul>
                </table>