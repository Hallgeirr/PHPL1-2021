<?php

class Node
{
    public $left;
    public $right;

    public function __construct(Node $left = null, Node $right = null)
    {
        $this->left = $left;
        $this->right = $right;
    }
}

function maxHeight(Node $node = null)
{
    if (!$node) {
        return -1;
    }

    $left = maxHeight($node->left) + 1;
    $right = maxHeight($node->right) + 1;

    return ($left > $right) ? $left : $right;
}

$node = new Node(
    new Node(
        new Node(
            new Node()
        ),
        new Node()
    ),
    new Node(
        new Node()
    )
);

echo maxHeight($node);