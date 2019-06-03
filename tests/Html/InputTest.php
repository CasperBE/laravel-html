<?php

namespace Spatie\Html\Test\Html;

class InputTest extends TestCase
{
    /** @test */
    public function it_can_create_an_input()
    {
        $this->assertHtmlStringEqualsHtmlString(
            '<input>',
            $this->html->input()
        );
    }

    /** @test */
    public function it_can_create_an_input_with_a_custom_type()
    {
        $this->assertHtmlStringEqualsHtmlString(
            '<input type="text">',
            $this->html->input('text')
        );
    }

    /** @test */
    public function it_can_create_an_input_with_a_name()
    {
        $this->assertHtmlStringEqualsHtmlString(
            '<input id="foo" type="text" name="foo">',
            $this->html->input('text', 'foo')
        );
    }

    /** @test */
    public function it_can_create_an_input_with_a_value()
    {
        $this->assertHtmlStringEqualsHtmlString(
            '<input id="foo" type="text" name="foo" value="bar">',
            $this->html->input('text', 'foo', 'bar')
        );
    }

    /** @test */
    public function it_can_create_an_input_with_a_placeholder()
    {
        $this->assertHtmlStringEqualsHtmlString(
            '<input placeholder="Foo bar">',
            $this->html->input()->placeholder('Foo bar')
        );
    }

    /** @test */
    public function it_can_create_an_input_that_is_required()
    {
        $this->assertHtmlStringEqualsHtmlString(
            '<input required>',
            $this->html->input()->required()
        );
    }

    /** @test */
    public function it_can_create_an_input_that_has_autofocus()
    {
        $this->assertHtmlStringEqualsHtmlString(
            '<input autofocus>',
            $this->html->input()->autofocus()
        );
    }

    /** @test */
    public function it_can_check_an_input()
    {
        $this->assertHtmlStringEqualsHtmlString(
            '<input type="checkbox" checked="checked">',
            $this->html->input('checkbox')->checked(true)
        );

        $this->assertHtmlStringEqualsHtmlString(
            '<input type="checkbox" checked="checked">',
            $this->html->input('checkbox')->checked(true)
        );
    }

    /** @test */
    public function it_can_uncheck_an_input()
    {
        $this->assertHtmlStringEqualsHtmlString(
            '<input type="checkbox">',
            $this->html->input('checkbox')->checked()->checked(false)
        );

        $this->assertHtmlStringEqualsHtmlString(
            '<input type="checkbox">',
            $this->html->input('checkbox')->checked()->unchecked()
        );
    }

    /** @test */
    public function it_can_create_an_input_that_is_readonly()
    {
        $this->assertHtmlStringEqualsHtmlString(
            '<input readonly>',
            $this->html->input()->readonly()
        );
    }

    /** @test */
    public function it_can_create_a_date_input()
    {
        $this->assertHtmlStringEqualsHtmlString(
            '<input type="date">',
            $this->html->date()
        );
    }

    /** @test */
    public function it_can_create_a_date_input_with_blank_date()
    {
        $this->assertHtmlStringEqualsHtmlString(
            '<input id="test_date" name="test_date" type="date" value=""/>',
            $this->html->date('test_date', '')
        );
    }

    /** @test */
    public function it_can_create_a_date_input_and_format_date()
    {
        $this->assertHtmlStringEqualsHtmlString(
            '<input id="test_date" name="test_date" type="date" value="2017-09-04"/>',
            $this->html->date('test_date', '2017-09-04T23:33:32')
        );
    }

    /** @test */
    public function it_can_create_a_date_input_and_format_model_date()
    {
        $this->html->model(['test_date' => '2017-09-04T23:33:32']);

        $this->assertHtmlStringEqualsHtmlString(
            '<input id="test_date" name="test_date" type="date" value="2017-09-04"/>',
            $this->html->date('test_date')
        );
    }

    /** @test */
    public function it_can_create_a_date_input_with_invalid_date()
    {
        $this->assertHtmlStringEqualsHtmlString(
            '<input id="test_date" name="test_date" type="date" value="notadate"/>',
            $this->html->date('test_date', 'notadate')
        );
    }

    /** @test */
    public function it_can_create_a_time_input()
    {
        $this->assertHtmlStringEqualsHtmlString(
                '<input type="time">',
                $this->html->time()
            );
    }

    /** @test */
    public function it_can_create_a_time_input_with_blank_value()
    {
        $this->assertHtmlStringEqualsHtmlString(
            '<input id="test_time" name="test_time" type="time" value=""/>',
            $this->html->time('test_time', '')
        );
    }

    /** @test */
    public function it_can_create_a_time_input_with_string_and_format()
    {
        $this->assertHtmlStringEqualsHtmlString(
            '<input id="test_time" name="test_time" type="time" value="23:33:32"/>',
            $this->html->time('test_time', '2017-09-04T23:33:32')
        );
    }

    /** @test */
    public function it_can_create_a_time_input_with_time_string_and_format()
    {
        $this->assertHtmlStringEqualsHtmlString(
            '<input id="test_time" name="test_time" type="time" value="11:30:00"/>',
            $this->html->time('test_time', '11:30')
        );
    }

    /** @test */
    public function it_can_create_a_time_input_with_invalid_time()
    {
        $this->assertHtmlStringEqualsHtmlString(
            '<input id="test_time" name="test_time" type="time" value="timeoclock"/>',
            $this->html->time('test_time', 'timeoclock')
        );
    }

    /** @test */
    public function it_can_create_a_time_input_with_model_time()
    {
        $this->html->model(['time' => '2017-09-04T23:33:32']);

        $this->assertHtmlStringEqualsHtmlString(
            '<input id="time" name="time" type="time" value="23:33:32"/>',
            $this->html->time('time')
        );
    }
}
