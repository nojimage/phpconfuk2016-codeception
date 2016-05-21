<?php

$I = new AcceptanceTester($scenario);
$I->wantTo('ツイッターで #phpconfuk を検索できる');

$I->amOnPage('/');
$I->comment('検索フィールドを開いて入力');
$I->click('検索');

$I->waitForElementVisible('#search-query');
$I->fillField('#search-query', '#phpconfuk');
$I->click('.StreamsTopBar-searchButton');
$I->wait(3);

$I->expect('検索ページが開いている');
$I->seeCurrentUrlMatches('~^/search~');
$I->seeInTitle('#phpconfuk');

$I->expect('結果に"PHPカンファレンス最高！"を含んでいる');
$I->see('PHPカンファレンス最高！', '#timeline');
