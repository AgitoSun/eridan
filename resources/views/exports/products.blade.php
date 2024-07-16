<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Название</th>
        <th>Артикул</th>
        <th>Метал</th>
        <th>Вес</th>
        <th>Размер</th>
        <th>Наличие</th>
        <th>Цена</th>
        <th>Категория</th>
        <th>На главной</th>
        <th>Дата</th>
    </tr>
    </thead>
    <tbody>
    @foreach($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->title }}</td>
            <td>{{ $product->sku }}</td>
            <td>{{ $product->metal }}</td>
            <td>{{ $product->weight }}</td>
            <td>{{ $product->size }}</td>
            <td>{{ $product->availability }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->category->title }}</td>
            <td>@if($product->favorites == true) Да @else Нет @endif</td>
            <td>{{ \Carbon\Carbon::parse($product->created_at)->translatedFormat('j F Y') }}</td>
            @foreach($product->inserts as $insert)
                <td>{{ $insert->name }}</td>
            @endforeach
        </tr>
    @endforeach
    </tbody>
</table>
