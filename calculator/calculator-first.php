<?php
$process_table = get_field('process_list', 'option');
$filter_design_table = get_field('filter_design', 'option'); 

$filter_material_type_list = get_field('filter_material_type_list', 'option');
$all_filters = get_field('all_filter_standart_sizes', 'option');
$const = get_field('general_calculator_settings', 'option');
$temperature_table = get_field('filter_material_type_list', 'option');

$lang = pll_current_language();

//генериреум массив со всеми фильтрами
foreach ($all_filters as $key => $value) {
    $csv = array_map('str_getcsv', file($value['file']['url']));

    for ($i=0; $i < count($csv); $i++) { 
        if ($i !== 0 && !empty($csv[$i][0]) && $csv[$i][1] ) {
            $item[] = [
                'size' => $csv[$i][0],
                'filter_place_area' => $csv[$i][1]
            ];
        }
    }

    $all_filters_array[$value['key_title']] = ['file_content' => $item ];
    unset($item);
}

// сортируем массив со всеми фильтрами по возрастанию
$i = 0;
foreach ($all_filters_array as $key => $value) {
    array_multisort($all_filters_array[$key]["file_content"][$i], SORT_ASC);
   
    $i++;
}
 ?>
    
<div class="calculator-body">
    <form id="calculator" novalidate>
        <div class="form-process">
            <?php if($lang == 'ru'){?>
                <label><?= __('Технологический процесс', 'calculator'); ?></label>
            <?}else if($lang == 'uk'){?>
                <label><?= __('Технологічний процес', 'calculator'); ?></label>
            <?}?>
            <select name="process" class="process" id="process">
                <?php if($lang == 'ru'){?>
                    <option value="" selected disabled hidden><?= __('Выберите процесс', 'calculator'); ?></option>
                <?}else if($lang == 'uk'){?>
                    <option value="" selected disabled hidden><?= __('Виберіть процес', 'calculator'); ?></option>
                <?}?>
                <?php
                  if($lang == 'ru'){
                    foreach($process_table as $key => $item) {
                        echo '<option value="'.($key+1).'" >'.$item['process_title'].'</option>';
                    }

                    }elseif($lang == 'uk'){
                        foreach($process_table as $key => $item) {
                            echo '<option value="'.($key+1).'" >'.$item['process_title_ua'].'</option>';
                        }
                    }
                ?>
            </select>
        </div>
        <div class="form-volume">
            <?php if($lang == 'ru'){?>
                <label for="volume"><?= __('Объем очищенного аспирационного воздуха, м<sup>3</sup>/час', 'calculator'); ?></label>
                <input name="volume" id="volume" type="text" placeholder="<?= __('Введите значение', 'calculator');?>" required >
            <?}else if($lang == 'uk'){?>
                <label for="volume"><?= __('Обсяг очищеного аспіраційного повітря, м<sup>3</sup>/год ', 'calculator'); ?></label>
                <input name="volume" id="volume" type="text" placeholder="<?= __('Введіть значення', 'calculator');?>" required >
            <?}?>
        </div>
        <div class="form-temperature">
            <?php if($lang == 'ru'){?>
                <label for="temperature"><?= __('Температура очищаемого аспирационного воздуха, &degC', 'calculator'); ?></label>
                <input name="temperature" id="temperature" type="text" placeholder="<?= __('Введите значение', 'calculator');?>" />
            <?}else if($lang == 'uk'){?>
                <label for="temperature"><?= __('Температура очищуваного аспіраційного повітря, &degC', 'calculator'); ?></label>
                <input name="temperature" id="temperature" type="text" placeholder="<?= __('Введіть значення', 'calculator');?>" />
            <?}?>
        </div>
        <div class="filter-design">
            <div class="res"></div>
        </div>
        <div class="form-button">
            <div class="calculator-block__button" >
                <input class="main-form__inp-submit main-form__inp-submit_p" type="submit" value="<?= $calculator['button']['button_title']; ?>">
                <svg width="37" height="43" viewBox="0 0 37 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M34.182 0H2.136C0.956 0 0 0.957 0 2.137V44.864C0 46.044 0.957 47.001 2.136 47.001H34.182C35.362 47.001 36.318 46.044 36.318 44.864V2.137C36.318 0.957 35.362 0 34.182 0ZM32.045 4.272V10.681H4.272V4.272H32.045ZM4.272 42.729V14.954H32.045V42.726H4.272V42.729Z" fill="#1423F0"/>
                    <path d="M11.9112 16.844H7.4762C6.8862 16.844 6.4082 17.323 6.4082 17.912V22.35C6.4082 22.94 6.8872 23.418 7.4762 23.418H11.9112C12.5012 23.418 12.9792 22.939 12.9792 22.35V17.912C12.9802 17.321 12.5032 16.844 11.9112 16.844Z" fill="#1423F0"/>
                    <path d="M20.375 16.844H15.941C15.351 16.844 14.873 17.323 14.873 17.912V22.35C14.873 22.94 15.351 23.418 15.941 23.418H20.375C20.965 23.418 21.443 22.939 21.443 22.35V17.912C21.444 17.321 20.965 16.844 20.375 16.844Z" fill="#1423F0"/>
                    <path d="M28.8399 16.844H24.4049C23.8149 16.844 23.3379 17.323 23.3379 17.912V22.35C23.3379 22.94 23.8159 23.418 24.4049 23.418H28.8399C29.4299 23.418 29.9079 22.939 29.9079 22.35V17.912C29.9079 17.321 29.4299 16.844 28.8399 16.844Z" fill="#1423F0"/>
                    <path d="M11.9112 25.5549H7.4762C6.8862 25.5549 6.4082 26.0329 6.4082 26.6219V31.0599C6.4082 31.6499 6.8872 32.1269 7.4762 32.1269H11.9112C12.5012 32.1269 12.9792 31.6489 12.9792 31.0599V26.6219C12.9802 26.0309 12.5032 25.5549 11.9112 25.5549Z" fill="#1423F0"/>
                    <path d="M20.375 25.5549H15.941C15.351 25.5549 14.873 26.0329 14.873 26.6219V31.0599C14.873 31.6499 15.351 32.1269 15.941 32.1269H20.375C20.965 32.1269 21.443 31.6489 21.443 31.0599V26.6219C21.444 26.0309 20.965 25.5549 20.375 25.5549Z" fill="#1423F0"/>
                    <path d="M11.9112 34.2661H7.4762C6.8862 34.2661 6.4082 34.7441 6.4082 35.3321V39.7701C6.4082 40.3621 6.8872 40.8381 7.4762 40.8381H11.9112C12.5012 40.8381 12.9792 40.3591 12.9792 39.7701V35.3321C12.9802 34.7421 12.5032 34.2661 11.9112 34.2661Z" fill="#1423F0"/>
                    <path d="M20.375 34.2661H15.941C15.351 34.2661 14.873 34.7441 14.873 35.3321V39.7701C14.873 40.3621 15.351 40.8381 15.941 40.8381H20.375C20.965 40.8381 21.443 40.3591 21.443 39.7701V35.3321C21.444 34.7421 20.965 34.2661 20.375 34.2661Z" fill="#1423F0"/>
                    <path d="M28.8399 25.5549H24.4049C23.8149 25.5549 23.3379 26.0329 23.3379 26.6219V39.7699C23.3379 40.3619 23.8159 40.8379 24.4049 40.8379H28.8399C29.4299 40.8379 29.9079 40.3589 29.9079 39.7699V26.6219C29.9079 26.0309 29.4299 25.5549 28.8399 25.5549Z" fill="#1423F0"/>
                </svg>
            </div>
        </div>
    </form>
    <div id="loader" style="text-align: center; position: relative;">
        <svg class="lds-spinner" width="50px"  height="50px"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" style="background: none;"><g transform="rotate(0 50 50)">
          <rect x="47" y="24" rx="9.4" ry="4.8" width="6" height="12" fill="#4658ac">
            <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.9166666666666666s" repeatCount="indefinite"></animate>
        </rect>
    </g><g transform="rotate(30 50 50)">
      <rect x="47" y="24" rx="9.4" ry="4.8" width="6" height="12" fill="#4658ac">
        <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.8333333333333334s" repeatCount="indefinite"></animate>
    </rect>
</g><g transform="rotate(60 50 50)">
  <rect x="47" y="24" rx="9.4" ry="4.8" width="6" height="12" fill="#4658ac">
    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.75s" repeatCount="indefinite"></animate>
</rect>
</g><g transform="rotate(90 50 50)">
  <rect x="47" y="24" rx="9.4" ry="4.8" width="6" height="12" fill="#4658ac">
    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.6666666666666666s" repeatCount="indefinite"></animate>
</rect>
</g><g transform="rotate(120 50 50)">
  <rect x="47" y="24" rx="9.4" ry="4.8" width="6" height="12" fill="#4658ac">
    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5833333333333334s" repeatCount="indefinite"></animate>
</rect>
</g><g transform="rotate(150 50 50)">
  <rect x="47" y="24" rx="9.4" ry="4.8" width="6" height="12" fill="#4658ac">
    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5s" repeatCount="indefinite"></animate>
</rect>
</g><g transform="rotate(180 50 50)">
  <rect x="47" y="24" rx="9.4" ry="4.8" width="6" height="12" fill="#4658ac">
    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.4166666666666667s" repeatCount="indefinite"></animate>
</rect>
</g><g transform="rotate(210 50 50)">
  <rect x="47" y="24" rx="9.4" ry="4.8" width="6" height="12" fill="#4658ac">
    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.3333333333333333s" repeatCount="indefinite"></animate>
</rect>
</g><g transform="rotate(240 50 50)">
  <rect x="47" y="24" rx="9.4" ry="4.8" width="6" height="12" fill="#4658ac">
    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.25s" repeatCount="indefinite"></animate>
</rect>
</g><g transform="rotate(270 50 50)">
  <rect x="47" y="24" rx="9.4" ry="4.8" width="6" height="12" fill="#4658ac">
    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.16666666666666666s" repeatCount="indefinite"></animate>
</rect>
</g><g transform="rotate(300 50 50)">
  <rect x="47" y="24" rx="9.4" ry="4.8" width="6" height="12" fill="#4658ac">
    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.08333333333333333s" repeatCount="indefinite"></animate>
</rect>
</g><g transform="rotate(330 50 50)">
  <rect x="47" y="24" rx="9.4" ry="4.8" width="6" height="12" fill="#4658ac">
    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="0s" repeatCount="indefinite"></animate>
</rect>
</g></svg>
</div>

</div>
<style>
    input:required:invalid {
        border: 3px solid red;
    }
</style>
<?php
global $wp;
  $current_url = home_url( add_query_arg( array(), $wp->request ) );
?>
<script type="text/javascript"> 

    jQuery(document).ready(function ($) { 

        jQuery('#calculator').ready(function ($) {
            $.ajax({
                <?php 
              
                    if($lang == 'ru'){?>
                    url: 'https://konstrack.com/konstr/wp-admin/admin-ajax.php', // сделали запрос 
                <? }else if($lang == 'uk'){?>
                    url: '<?= (get_page_link() == "https://konstrack.com/konstr/pilogazoochistka-i-aspiratsiya/") ? "" : "../"; ?>../wp-admin/admin-ajax.php', // сделали запрос 
                <?}?>
                type: "POST", // указали метод
                data: { // передаем параметры отправляемого запроса
                    action: 'calculator_pylegaz_action', // вызываем хук который обработает наш ajax запрос
                    filters_table: <?= json_encode($filter_design_table) ?>,
                    process_table: <?= json_encode($process_table) ?>,
                    selected_process: $('.process option:selected').val(),
                },
                success: function (data) {// получаем результат в переменной data
                    $('.res').html(data); // выводим результат в новый див 
                }
            });
        }); 


        $('.process').change(function () { // кликнули на кнопку
            $.ajax({
                <?php if($lang == 'ru'){?>
                    url: 'https://konstrack.com/konstr/wp-admin/admin-ajax.php', // сделали запрос 
                <? }else if($lang == 'uk'){?>
                    url: '<?= (get_page_link() == "https://konstrack.com/konstr/pilogazoochistka-i-aspiratsiya/") ? "" : "../"; ?>../wp-admin/admin-ajax.php', // сделали запрос 
                <?}?>
                type: "POST", // указали метод
                data: { // передаем параметры отправляемого запроса
                    action: 'calculator_pylegaz_action', // вызываем хук который обработает наш ajax запрос
                    filters_table: <?= json_encode($filter_design_table) ?>,
                    process_table: <?= json_encode($process_table) ?>,
                    selected_process: $('.process option:selected').val(),
                },
                success: function (data) {// получаем результат в переменной data
                    $('.res').html(data); // выводим результат в новый див 
                }
            }); 
        });   

        $('#calculator').validate({
            rules: {
                process: {
                    required: true
                },
                volume: {
                    required: true
                },
                temperature: {
                    required: true
                },
            },
            messages: {
                process: "Поле обязательно к заполнению!",
                volume: "Поле обязательно к заполнению!",
                temperature: "Поле обязательно к заполнению!"
            },
            submitHandler: function (form) { 
                const formData = $(form).serialize();

                $.ajax({
                    <?php if($lang == 'ru'){?>
                        url: 'https://konstrack.com/konstr/wp-admin/admin-ajax.php', // сделали запрос 
                     <? }else if($lang == 'uk'){?>
                        url: '<?= (get_page_link() == "https://konstrack.com/konstr/pilogazoochistka-i-aspiratsiya/") ? "" : "../"; ?>../wp-admin/admin-ajax.php', // сделали запрос 
                    <?}?>
                    type: "POST", // указали метод
                    data: { // передаем параметры отправляемого запроса
                        action: 'calculator_pylegaz_filter_action', // вызываем хук который обработает наш ajax запрос
                        form_data: formData, // передаем параметры из кнопки 
                        filters_design_select: $('.filters-design-select option:selected').val(),
                        process_table: <?= json_encode($process_table) ?>,
                        filter_material_type_list: <?= json_encode($filter_material_type_list); ?>,
                        all_filters: <?= json_encode($all_filters_array); ?>,
                        const: <?= $const['const']; ?>,
                        temperature_table: <?= json_encode($temperature_table); ?>,
                        filter_design: <?= json_encode($filter_design_table); ?>
                    },
                    success: function (data) {// получаем результат в переменной data
                        $('.filter-results').html(data); // выводим результат в новый див 
                    }
                });
                return false;
            },
        });

        $('#loader')
        .hide()  // Hide it initially
        .ajaxStart(function() {
            $(this).show();
            $('.filter-results').hide();
        })
        .ajaxStop(function() {
            $(this).hide();
            $('.filter-results').show();
        });
    }); 


</script>
