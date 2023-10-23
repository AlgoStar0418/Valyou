<?php

use Illuminate\Support\Facades\Route;

class Company
{
    public $name;
    public $img;
    public function __construct($name, $img)
    {
        $this->name = $name;
        $this->img = $img;
    }
}

class Faq
{
    public $title;
    public $message;
    public $open;
    public function __construct($title, $message)
    {
        $this->title = $title;
        $this->message = $message;
        $this->open = false;
    }

    public function toggle()
    {
        if ($this->open == true) {
            $this->open = false;
        } else {
            $this->open = true;
        }
    }
}


Route::get('/', function () {
    $companies = [
        new Company('Alibaba Group Award Winner', 'https://mms.businesswire.com/media/20150803005509/en/442597/23/Alibaba_Group_vertical_bilingual.jpg'),
        new Company('Official Cloud Service Partner', 'https://valyou-x.vercel.app/assets/alibabacloud_icon.svg'),
        new Company('People Choice Award', 'https://citiespowerpartnership.org.au/wp-content/uploads/2023/07/Melbourne-logo-300.png'),
        new Company('Official Cloud Service Partner', 'https://valyou-x.vercel.app/assets/alibabacloud_icon.svg'),
        new Company('As Seen On Inflight entertainment', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS1KwVtS7Qxat5lDNtUa7rS-3F4n2EsPNiV2w&usqp=CAU?w=300'),
        new Company('Top 20 Global Finalist / 700', 'https://valyou-x.vercel.app/assets/alibabacloud_icon.svg'),
        new Company('As seen at Midem France', 'https://www.amadeamusicproductions.com/wp-content/uploads/2017/10/Midem.jpg'),
        new Company('Award Winner', 'https://playbook.hatchquarter.com.au/assets/images/images-home/trade-victoria.jpg'),
        new Company('Award Winner', 'https://cdn-images-1.medium.com/v2/resize:fit:358/1*xtXomyMQEkeMxYZh1IxIDw@2x.png'),
        new Company('', 'https://valyou-x.vercel.app/_next/image?url=%2Fassets%2Ffintech_logo.webp&w=1920&q=75'),
    ];

    $faqs = [
        new Faq("Music Artist.", "Cost to launch music career Independently is very expensive, estimated around $500K to $2M
        \nAn exchange where Music artists list as their own startups, music fans can invest.
        \n\n
        Streaming platforms significantly shortchanges the value of the average music artist.
        \nDEFI pay per/view streaming with increased NFT value for unlimited song access.
        \n\n
        No way to connect with quality assured reputable music industry professionals.
        \nMarketplace to connect businesses offering pro services to listed artists brands.
        \n\n
        Artists lack a business mindset and understanding of music industry contracts.
        \nSmart Contract & Fund Management, reduce risk & still maximise profits for investors.
        \n\n
        Upcoming, Independent & Major Artists. All artists can get listed and raise the capital they need to launch or enhance their music careers or brand. Imagine 20,000 of your true fans invested $100 that is $2,000,000 for you to build your brand and stay in control of your business independent or signed inside a new global music Industry and artist focused economy.")
    ];

    return view('index')->with(compact('companies'))->with(compact('faqs'));
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/pricing', function () {
    return view('pricing');
});

class Artist
{
    public $name;
    public $img;
    public $role;
    public $changePercent;
    public $stockPrice;
    public $marketValue;

    public function __construct($name, $img, $role, $changePercent, $stockPrice, $marketValue)
    {
        $this->name = $name;
        $this->img = $img;
        $this->role = $role;
        $this->changePercent = $changePercent;
        $this->stockPrice = $stockPrice;
        $this->marketValue = $marketValue;
    }
}

Route::get('/market', function () {
    $artists = [
        new Artist("Drake", "https://valyou-x.vercel.app/_next/image?url=%2Fassets%2FdrakeDp.png&w=64&q=75", "rapper", "+250.9020", "$ 1.4100", "141,000,000"),
        new Artist("Drake", "https://valyou-x.vercel.app/_next/image?url=%2Fassets%2FdrakeDp.png&w=64&q=75", "singer", "+149.9020", "$ 1.4100", "141,000,000"),
        new Artist("Drake", "https://valyou-x.vercel.app/_next/image?url=%2Fassets%2FdrakeDp.png&w=64&q=75", "rapper", "+249.9020", "$ 1.4100", "141,000,000"),
        new Artist("Drake", "https://valyou-x.vercel.app/_next/image?url=%2Fassets%2FdrakeDp.png&w=64&q=75", "rapper", "+249.9020", "$ 1.4100", "141,000,000"),
        new Artist("Drake", "https://valyou-x.vercel.app/_next/image?url=%2Fassets%2FdrakeDp.png&w=64&q=75", "rapper", "+249.9020", "$ 1.4100", "141,000,000")
    ];

    return view('market')->with(compact('artists'));
});

