/******/ (() => { // webpackBootstrap
    var __webpack_exports__ = {};
    /*!******************************************!*\
      !*** ./resources/js/createValidation.js ***!
      \******************************************/
    document.addEventListener('DOMContentLoaded', function () {
        //.validationForm を指定した最初の form 要素を取得
        var validationForm = document.querySelector('.validationForm'); //.validationForm を指定した form 要素が存在すれば

        if (validationForm) {
            //エラーを表示する span 要素に付与するクラス名（エラー用のクラス）
            var errorClassName = 'error'; //required クラスを指定された要素の集まり

            var requiredElems = document.querySelectorAll('.required'); //email クラスを指定された要素の集まり

            var emailElems = document.querySelectorAll('.email'); //エラーメッセージを表示する span 要素を生成して親要素に追加する関数
            //elem ：対象の要素
            //errorMessage ：表示するエラーメッセージ

            var createError = function createError(elem, errorMessage) {
                //span 要素を生成
                var errorSpan = document.createElement('span'); //エラー用のクラスを追加（設定）

                errorSpan.classList.add(errorClassName); //aria-live 属性を設定

                errorSpan.setAttribute('aria-live', 'polite'); //引数に指定されたエラーメッセージを設定

                errorSpan.textContent = errorMessage; //elem の親要素の子要素として追加

                elem.parentNode.insertBefore(errorSpan, elem.nextSibling);
                console.log("error:" + errorMessage);
            }; //form 要素の submit イベントを使った送信時の処理


            validationForm.addEventListener('submit', function (e) {
                //エラーを表示する要素を全て取得して削除（初期化）
                var errorElems = validationForm.querySelectorAll('.' + errorClassName);
                errorElems.forEach(function (elem) {
                    elem.remove();
                }); //.required を指定した要素を検証

                requiredElems.forEach(function (elem) {
                    if (elem.tagName === 'INPUT' && elem.getAttribute('type') === 'checkbox') {
                        //親要素を基点に選択状態の最初のチェックボックス要素を取得
                        var checked = elem.parentElement.querySelector('input[type="checkbox"]:checked'); //選択状態のチェックボックス要素を取得できない場合

                        if (checked === null) {
                            //エラーを表示
                            createError(document.querySelector('.lang-box'), '少なくとも1つを選択してください'); //フォームの送信を中止

                            e.preventDefault();
                        }
                    } else {
                        //値（value プロパティ）の前後の空白文字を削除
                        var elemValue = elem.value.trim(); //値が空の場合はエラーを表示してフォームの送信を中止

                        if (elem.getAttribute('type') === 'file' && elemValue.length === 0) {
                            createError(document.querySelector('#dragDropArea'), '入力は必須です');
                        } else if (elemValue.length === 0) {
                            createError(elem, '入力は必須です');
                            e.preventDefault();
                        }
                    }
                }); //.email を指定した要素を検証

                emailElems.forEach(function (elem) {
                    //Email の検証に使用する正規表現パターン
                    var pattern = /^([\+\x2D0-9_a-z\u017F\u212A]+)(\.[\+\x2D0-9_a-z\u017F\u212A]+)*@([\x2D0-9a-z\u017F\u212A]+\.)+[a-z\u017F\u212A]{2,6}$/i; //値が空でなければ

                    if (elem.value !== '') {
                        //test() メソッドで値を判定し、マッチしなければエラーを表示してフォームの送信を中止
                        if (!pattern.test(elem.value)) {
                            createError(elem, 'Email アドレスの形式が正しくないようです。');
                            e.preventDefault();
                        }
                    }
                });
                window.scroll({
                    top: 0,
                    behavior: 'smooth'
                });
            });
        }
    });
    /******/
})()
    ;