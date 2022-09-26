document.addEventListener('DOMContentLoaded', () => {
    //.validationForm を指定した最初の form 要素を取得
    const validationForm = document.querySelector('.validationForm');
    //.validationForm を指定した form 要素が存在すれば
    if (validationForm) {
        //エラーを表示する span 要素に付与するクラス名（エラー用のクラス）
        const errorClassName = 'error';

        //required クラスを指定された要素の集まり
        const requiredElems = document.querySelectorAll('.required');

        //email クラスを指定された要素の集まり
        const emailElems = document.querySelectorAll('.email');

        //エラーメッセージを表示する span 要素を生成して親要素に追加する関数
        //elem ：対象の要素
        //errorMessage ：表示するエラーメッセージ
        const createError = (elem, errorMessage) => {
            //span 要素を生成
            const errorSpan = document.createElement('span');
            //エラー用のクラスを追加（設定）
            errorSpan.classList.add(errorClassName);
            //aria-live 属性を設定
            errorSpan.setAttribute('aria-live', 'polite');
            //引数に指定されたエラーメッセージを設定
            errorSpan.textContent = errorMessage;
            //elem の親要素の子要素として追加
            elem.parentNode.insertBefore(errorSpan, elem.nextSibling);
            console.log("error:" + errorMessage);
        }

        //form 要素の submit イベントを使った送信時の処理
        validationForm.addEventListener('submit', (e) => {
            //エラーを表示する要素を全て取得して削除（初期化）
            const errorElems = validationForm.querySelectorAll('.' + errorClassName);
            errorElems.forEach((elem) => {
                elem.remove();
            });

            //.required を指定した要素を検証
            requiredElems.forEach((elem) => {
                if (elem.tagName === 'INPUT' && elem.getAttribute('type') === 'checkbox') {
                    //親要素を基点に選択状態の最初のチェックボックス要素を取得
                    const checked = elem.parentElement.querySelector('input[type="checkbox"]:checked');
                    //選択状態のチェックボックス要素を取得できない場合
                    if (checked === null) {
                        //エラーを表示
                        createError(document.querySelector('.lang-box'), '少なくとも1つを選択してください');
                        //フォームの送信を中止
                        e.preventDefault();
                    }
                } else {
                    //値（value プロパティ）の前後の空白文字を削除
                    const elemValue = elem.value.trim();
                    //値が空の場合はエラーを表示してフォームの送信を中止
                    if (elem.getAttribute('type') === 'file' && elemValue.length === 0) {
                        createError(document.querySelector('#dragDropArea'), '入力は必須です')
                    } else if (elemValue.length === 0) {
                        createError(elem, '入力は必須です');
                        e.preventDefault();
                    }
                }
            });

            //.email を指定した要素を検証
            emailElems.forEach((elem) => {
                //Email の検証に使用する正規表現パターン
                const pattern = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ui;
                //値が空でなければ
                if (elem.value !== '') {
                    //test() メソッドで値を判定し、マッチしなければエラーを表示してフォームの送信を中止
                    if (!pattern.test(elem.value)) {
                        createError(elem, 'Email アドレスの形式が正しくないようです。');
                        e.preventDefault();
                    }
                }
            });

            window.scroll({ top: 0, behavior: 'smooth' });
        });
    }
});