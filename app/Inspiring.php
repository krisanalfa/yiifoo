<?php namespace app;

/**
 * Get random inspiration.
 *
 * @author Krisan Alfa Timur <krisanalfa@docotel.co.id>
 */
class Inspiring
{
    /**
     * The items contained in the collection.
     *
     * @var array
     */
    protected $items = [

        '"The trouble is you think you have time." — Buddha',
        '"Whatever you are, be a good one." — Abraham Lincoln',
        '"I don’t want to earn my living; I want to live." — Oscar Wilde',
        '"Life shrinks or expands in proportion to one’s courage." — Anais Nin',
        '"Life must be lived forwards, but can only be understood backwards." — Kierkegaard',
        '"Life is a shipwreck, but we must not forget to sing in the lifeboats." — Voltaire',
        '"Do not dwell in the past, do not dream of the future, concentrate the mind on the present moment." — Buddha',

    ];

    /**
     * Get one or more items randomly from the collection.
     *
     * @param int $amount
     *
     * @return mixed
     */
    public function random($amount = 1)
    {
        $keys = array_rand($this->items, $amount);

        return is_array($keys) ? array_intersect_key($this->items, array_flip($keys)) : $this->items[$keys];
    }

    /**
     * Create a new collection instance if the value isn't one already.
     *
     * @return static
     */
    public static function make()
    {
        return new static;
    }
}
