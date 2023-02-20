<!-- Форма для ввода поискового запроса -->
<form id="search-form">
    <input type="text" name="search" placeholder="Введите запрос">
    <button type="submit">Поиск</button>
</form>

<!-- Таблица для вывода результатов -->
<table id="search-results">
    <thead>
        <tr>
            <th>Фамилия</th>
            <th>Имя</th>
            <th>Отчество</th>
        </tr>
    </thead>
    <tbody>
    </tbody>
</table>

<!-- Скрипт для обработки отправки формы по AJAX -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#search-form').submit(function(event) {
            event.preventDefault();

            $.ajax({
                type: 'POST',
                url: '/search_results',
                data: $(this).serialize(),
                success: function(response) {
                    $('#search-results tbody').empty();

                    if (response.length > 0) {
                        $.each(response, function(index, user) {
                            $('#search-results tbody').append('<tr><td>' + user.surname + '</td><td>' + user.name + '</td><td>' + user.patronymic + '</td></tr>');
                        });
                    } else {
                        $('#search-results tbody').append('<tr><td colspan="3">Ничего не найдено</td></tr>');
                    }
                }
            });
        });
    });
</script>
