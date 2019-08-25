<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul>
        @foreach ($addresses as $address)
            <li>{{ $address->name }}</li>
            @if ($address->hasChild())
                <ul>
                    @foreach ($address->children()->get() as $child)
                        <li>{{ $child->name }}</li>
                        @if ($child->hasChild())
                            <ul>
                                @foreach ($child->children()->get() as $leaf)
                                    <ul>
                                        <li>{{ $leaf->name }}</li>
                                    </ul>
                                @endforeach
                            </ul>
                        @endif
                    @endforeach
                </ul>
            @endif
        @endforeach
    </ul>
</body>
</html>
