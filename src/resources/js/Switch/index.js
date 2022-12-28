const allBtn = document.getElementById("switch_portfolio_all");
const publicBtn = document.getElementById("switch_portfolio_public");
const privateBtn = document.getElementById("switch_portfolio_private");


const eraseDisabled = () => {
    const portfolioSwitch = document.getElementsByClassName("switch_portfolio_btn");

    for (const pro of portfolioSwitch) {
        pro.disabled = false;
    }
}

const portfolioDispStyle = (publicStyle, privateStyle) => {
    const publicPortfolio = document.getElementById("public_portfolio");
    const privatePortfolio = document.getElementById("private_portfolio");

    publicPortfolio.style.display = publicStyle;
    privatePortfolio.style.display = privateStyle;
}

const switchAll = () => {
    // 全てを表示する処理
    eraseDisabled();
    allBtn.disabled = true;
    portfolioDispStyle("block", "block");
}

const switchPublic = () => {
    // 公開を表示する処理
    eraseDisabled();
    publicBtn.disabled = true;
    portfolioDispStyle("block", "none");
}

const switchPrivate = () => {
    // 非公開を表示する処理
    eraseDisabled();
    privateBtn.disabled = true;
    portfolioDispStyle("none", "block");
}

allBtn.addEventListener('click', switchAll);

publicBtn.addEventListener('click', switchPublic);

privateBtn.addEventListener('click', switchPrivate);