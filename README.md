### Results

Input

```
Array
(
    [0] => Array
        (
            [id] => 1
            [order] => null
            [parent] => 0
            [title] => Eyes
            [slug] => eyes
        )

    [1] => Array
        (
            [id] => 2
            [order] => null
            [parent] => 1
            [title] => Blepharospasm
            [slug] => blepharospasm
        )

    [2] => Array
        (
            [id] => 3
            [order] => null
            [parent] => 0
            [title] => Neck
            [slug] => neck
        )

    [3] => Array
        (
            [id] => 4
            [order] => null
            [parent] => 3
            [title] => Antercollis
            [slug] => antercollis
        )

    [4] => Array
        (
            [id] => 5
            [order] => null
            [parent] => 3
            [title] => Retrocollis
            [slug] => retrocollis
        )

    [5] => Array
        (
            [id] => 6
            [order] => null
            [parent] => 3
            [title] => Pure Turn left
            [slug] => pure-turn-left
        )

    [6] => Array
        (
            [id] => 7
            [order] => null
            [parent] => 3
            [title] => Pure Turn Right
            [slug] => pure-turn-right
        )

    [7] => Array
        (
            [id] => 8
            [order] => null
            [parent] => 3
            [title] => Pure Tilt Left
            [slug] => pure-tilt-left
        )

    [8] => Array
        (
            [id] => 9
            [order] => null
            [parent] => 3
            [title] => Pure Tilt Right
            [slug] => pure-tilt-right
        )

    [9] => Array
        (
            [id] => 10
            [order] => null
            [parent] => 0
            [title] => Face
            [slug] => face
        )

    [10] => Array
        (
            [id] => 11
            [order] => null
            [parent] => 10
            [title] => Hemifacial Spasm
            [slug] => hemifacial-spasm
        )

    [11] => Array
        (
            [id] => 12
            [order] => null
            [parent] => 10
            [title] => Meige Syndrome Full Face
            [slug] => meige-syndrome-full-face
        )

    [12] => Array
        (
            [id] => 13
            [order] => null
            [parent] => 10
            [title] => Pouting
            [slug] => pouting
        )

    [13] => Array
        (
            [id] => 14
            [order] => null
            [parent] => 10
            [title] => Risus Sardonicus
            [slug] => risus-sardonicus
        )

    [14] => Array
        (
            [id] => 15
            [order] => null
            [parent] => 0
            [title] => Jaw
            [slug] => jaw
        )

    [15] => Array
        (
            [id] => 16
            [order] => null
            [parent] => 15
            [title] => Open
            [slug] => open
        )

    [16] => Array
        (
            [id] => 17
            [order] => null
            [parent] => 15
            [title] => Closed
            [slug] => closed
        )

    [17] => Array
        (
            [id] => 18
            [order] => null
            [parent] => 0
            [title] => Tongue
            [slug] => tongue
        )

    [18] => Array
        (
            [id] => 19
            [order] => null
            [parent] => 18
            [title] => Protrusion
            [slug] => protrusion
        )

)
```

Output

```
Array
(
    [0] => Array
        (
            [id] => 1
            [order] => null
            [parent] => 0
            [title] => Eyes
            [slug] => eyes
            [children] => Array
                (
                    [0] => Array
                        (
                            [id] => 2
                            [order] => null
                            [parent] => 1
                            [title] => Blepharospasm
                            [slug] => blepharospasm
                        )

                )

        )

    [1] => Array
        (
            [id] => 3
            [order] => null
            [parent] => 0
            [title] => Neck
            [slug] => neck
            [children] => Array
                (
                    [0] => Array
                        (
                            [id] => 4
                            [order] => null
                            [parent] => 3
                            [title] => Antercollis
                            [slug] => antercollis
                        )

                    [1] => Array
                        (
                            [id] => 5
                            [order] => null
                            [parent] => 3
                            [title] => Retrocollis
                            [slug] => retrocollis
                        )

                    [2] => Array
                        (
                            [id] => 6
                            [order] => null
                            [parent] => 3
                            [title] => Pure Turn left
                            [slug] => pure-turn-left
                        )

                    [3] => Array
                        (
                            [id] => 7
                            [order] => null
                            [parent] => 3
                            [title] => Pure Turn Right
                            [slug] => pure-turn-right
                        )

                    [4] => Array
                        (
                            [id] => 8
                            [order] => null
                            [parent] => 3
                            [title] => Pure Tilt Left
                            [slug] => pure-tilt-left
                        )

                    [5] => Array
                        (
                            [id] => 9
                            [order] => null
                            [parent] => 3
                            [title] => Pure Tilt Right
                            [slug] => pure-tilt-right
                        )

                )

        )

    [2] => Array
        (
            [id] => 10
            [order] => null
            [parent] => 0
            [title] => Face
            [slug] => face
            [children] => Array
                (
                    [0] => Array
                        (
                            [id] => 11
                            [order] => null
                            [parent] => 10
                            [title] => Hemifacial Spasm
                            [slug] => hemifacial-spasm
                        )

                    [1] => Array
                        (
                            [id] => 12
                            [order] => null
                            [parent] => 10
                            [title] => Meige Syndrome Full Face
                            [slug] => meige-syndrome-full-face
                        )

                    [2] => Array
                        (
                            [id] => 13
                            [order] => null
                            [parent] => 10
                            [title] => Pouting
                            [slug] => pouting
                        )

                    [3] => Array
                        (
                            [id] => 14
                            [order] => null
                            [parent] => 10
                            [title] => Risus Sardonicus
                            [slug] => risus-sardonicus
                        )

                )

        )

    [3] => Array
        (
            [id] => 15
            [order] => null
            [parent] => 0
            [title] => Jaw
            [slug] => jaw
            [children] => Array
                (
                    [0] => Array
                        (
                            [id] => 16
                            [order] => null
                            [parent] => 15
                            [title] => Open
                            [slug] => open
                        )

                    [1] => Array
                        (
                            [id] => 17
                            [order] => null
                            [parent] => 15
                            [title] => Closed
                            [slug] => closed
                        )

                )

        )

    [4] => Array
        (
            [id] => 18
            [order] => null
            [parent] => 0
            [title] => Tongue
            [slug] => tongue
            [children] => Array
                (
                    [0] => Array
                        (
                            [id] => 19
                            [order] => null
                            [parent] => 18
                            [title] => Protrusion
                            [slug] => protrusion
                        )

                )

        )

)
```