<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         1.2.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Test\TestCase\Controller;

use App\Controller\PagesController;
use Cake\Core\App;
use Cake\Core\Configure;
use Cake\Http\Response;
use Cake\Http\ServerRequest;
use Cake\TestSuite\IntegrationTestCase;
use Cake\View\Exception\MissingTemplateException;

/**
 * PagesControllerTest class
 */
class PagesControllerTest extends IntegrationTestCase
{
    /**
     * testMultipleGet method
     *
     * @return void
     */
    public function testMultipleGet()
    {
        $this->get('/');
        $this->assertResponseOk();
        $this->get('/');
        $this->assertResponseOk();
    }

    /**
     * testDisplay method
     *
     * @return void
     */
    public function testDisplay()
    {
        $this->get('/');

        $this->assertResponseOk();

        $this->assertHtml(['h1' => true], '<h1>The Wealth you want tomorrow, Starts Here.</h1>');
        $this->assertResponseContains('Save and Invest for your future in Naira & Dollars.');
        //section 2
        $this->assertResponseContains('You are not just saving, but investing in a guaranteed system that has very little risk but gives very high returns');
        $this->assertHtml(['p' => true], "<p>Whether you're saving towards paying your rent, funding your business, education or just saving for the future, there's an investment plan that suits you on Doubble.</p>");
        $this->assertResponseContains('With Doubble, your money is as secure as in a bank and is insured by NDIC. Even if something happens to Sterling Bank (and nothing will), your money and interest is secure');

        //Fixed investment
        $this->assertHtml(['p' => true], "<p>Earn the best interest rates available in Nigeria on your existing Naira and USD savings with the Doubble fixed investemt plan.</p>");
        //Target investment
        $this->assertHtml(['p' => true], "<p>Save towards a goal or target amount in Naira or USD and earn attractive interest rates towards meeting your goals</p>");

        //reward investment
        $this->assertHtml(['p' => true], "<p>With Doubble rewards investment plans, you can make monthly contributions over a period of time and make as much as twice your money in value. Explore the Doubble rewards variants below</p>");

        //DO more than invest section
        $this->assertHtml(['p' => true], "<p>You can give the best gift known to man, Money. Cash gifts to reward a spouse, child/children, parent or anyone else of choice.</p");
        $this->assertHtml(['p' => true], "<p>Flexible repayment system which empowers you to plan towards future consistent cash outflows. You can decide to receive your interest repayment either monthly or as a lump sum.</p>");
        $this->assertHtml(['p' => true], "<p>You can start your investment process all by yourself on this platform and select a convenient date and time for your investment to commence.<p>");

        //Callout section

        $this->assertResponseContains('Join over 100,000 Nigerians who are already getting Doubble returns on their savings and investments.');
       //Testimonial section
        $this->assertResponseContains('I am not the most disciplined individual when it comes to my finances. Doubble has proven to be a great savings platform for me since I started using it last year. It makes it easy for me to meet my savings goals and practice financial discipline. I stan Doubble.');
        $this->assertResponseContains('Elomena Momoh');

        $this->assertResponseContains('<html>');
    }

    /**
     * testFaq method
     *
     * @return void
     */
    public function testFaqs()
    {
        $this->get('/faqs');

        $this->assertResponseOk();
        $this->assertResponseContains('How can we help you?');
        $this->assertResponseContains('Can I pre-terminate my Investment?');
        $this->assertHtml(['div' => true], "<div>Yes. The investment plan can be pre-terminated. However, if terminated before the end of the tenure, you will get your full contributions forfeiting 50% of the accrued earnings.</div>");

        $this->assertResponseContains('How do I know my balance?');
        $this->assertHtml(['div' => true], "<div>You can view your balance on your profile page using your log-in details.</div>");
        $this->assertResponseContains('Can I purchase multiple plans?');
        $this->assertHtml(['div' => true], "<div>Yes, you can purchase multiple plans for your benefit or other beneficiaries.</div>");
        $this->assertResponseContains('<html>');
    }

    /**
     * testDistrubutor method
     *
     * @return void
     */
    // public function testDistributor()
    // {
    //     $this->get('/apply-as-distributor');

    //     $this->assertResponseOk();
    //     $this->assertResponseContains('Join the Padwagon');
    //     $this->assertHtml(['input' => ['name', 'id' => 'first_name']], '<input name="first_name" id="first_name"></input>');
    //     $this->assertHtml(['select' => ['name', 'id' => 'seller_type']], '<select name="seller_type" id="seller_type"></select>');
    //     $this->assertResponseContains('<html>');
    // }

    /**
     * testAbout method
     *
     * @return void
     */
    // public function testAbout()
    // {
    //     $this->get('/about-us');

    //     $this->assertResponseOk();
    //     $this->assertResponseContains('WHAT DRIVES US');
    //     $this->assertHtml(['h6' => true], '<h6>Caring and uplifting women all over the world</h6>');
    //     $this->assertHtml(['h6' => true], '<h6>Our Core Values</h6>');
    //     $this->assertResponseContains('<html>');
    // }

    /**
     * Test that missing template renders 404 page in production
     *
     * @return void
     */
    public function testMissingTemplate()
    {
        Configure::write('debug', false);
        $this->get('/pages/not_existing');

        $this->assertResponseFailure();
        $this->assertResponseContains('Error');
    }

    /**
     * Test that missing template in debug mode renders missing_template error page
     *
     * @return void
     */
    public function testMissingTemplateInDebug()
    {
        Configure::write('debug', true);
        $this->get('/pages/not_existing');

        $this->assertResponseFailure();
        $this->assertResponseContains('Missing Template');
        $this->assertResponseContains('Stacktrace');
        $this->assertResponseContains('not_existing.ctp');
    }

    /**
     * This route exposes the Terms  route
     */
    public function testTerms()
    {
        $this->get('/terms');
        $this->assertResponseContains('Terms And Conditions');
        $this->assertResponseContains('To assume full responsibility for the genuineness, correctness and validity of all endorsements appearing on all documents relating to the account.');
        $this->assertResponseContains("To be bound by the Bank's rules for the conduct of an account(s) receipt of which I hereby acknowledge.");
        $this->assertResponseContains("To free the Bank from any responsibility or liability for any loss or damage to funds deposited with the Bank due to any future Government order, law, levy, tax, embargo such other causes beyond the Bank's control.");
        $this->assertResponseContains('That all funds standing to my credit are payable only in such local currency as maybe in circulation.');
        $this->assertResponseContains('To be bound by any notification of change in conditions governing the account(s) or information relating thereto directed to my last known address and any mail set to my last known address shall be considered and received by me at the time it would be delivered.');
    }

    /**
     * This route exposes the Rewards Product route
     */
    public function testRewardProduct()
    {
        $this->get('/reward-product');
        $this->assertResponseContains('Doubble Reward');
        $this->assertResponseContains('Save towards your future goals');
        $this->assertResponseContains('Either you are saving up for a future mortgage, your education or that big purchase, Doubble rewards suit your future needs.');
        ///section 2
        $this->assertResponseContains('Rewards Investment Products');
        $this->assertHtml(['p' => true], "<p>Doubble 3 is a 6 - year investment contract that offers a 25% return on invested funds. Monthly contributions are made by you for the first 3 years and your invested amount plus returns are paid to you every month for the next 3 years. For example, If you invest N 1,000,000 over the span of 3 years , you make N250,000 plus your savings in returns spread over the duration of the next 3 years.</p>");
        $this->assertHtml(['p' => true], "<p>Doubble 5 is a 10-year investment contract that offers a 50% profit on the money you invest. Monthly contributions are made by you for the first 5 years and your invested amount plus returns are paid to you every month for the next 5 years. This means you make half your investment in returns over the span of 5 years. For example, If you invest N 1,000,000 in the first 5 years, you make N1,500,000 in returns spread over the next 5 years.</p>");
        $this->assertHtml(['p' => true], "<p>Doubble 10 is a 15-year plan that offers a 100% profit on the money you invest. You make a monthly deposit for 5 years and you get the exact amount that you have saved plus interests paid back to you monthly in another 10 years. This means If your total savings over 5 years is N 300,000, you get N600,000 in returns for the next 10 years.</p>");
        $this->assertHtml(['p' => true], "<p>Doubble Lump Sum is a 10-year investment plan that gives you double your money over a 10 year period after a 5 year interval. Contribution is made in one bulk amount and you get 100% returns on your money starting from year 6 to year 10. For example, If you invest N 1,000,000, you wait for a period of 5 years after which you get paid N 2,000,000 over a 5 year period from year 6 to year 10.</p>");

        //testimonial section
        $this->assertHtml(['p' => true], "<p>In 2017, I had a goal to complete my Msc in Computer Science at an Ivy league university by 2020. I started saving towards this goal with Doubble rewards. It seemed like a herculean task to save monthly for 3 years but the automated savings feature on Doubble inspired the discipline I needed. Now, I am half way through my Msc program at one of the top universities in the United Kingdom.</p>");
        $this->assertHtml(['span' => true], "<span>Seni Ibrahim</span>");
    }

    /**
     * This route exposes the Target Product route
     */
    public function testTargetProduct()
    {
        $this->get('/target-product');
        $this->assertResponseContains('Doubble target');
        $this->assertResponseContains('Achieve your financial goals');
        $this->assertResponseContains('Our target investment plan does exactly what the name implies, helps you meet a financial goal or target without having to come up with the whole cash. Whether you are saving for a big life event like a wedding or you plan to get that MBA, you have the option of voluntary additional contributions, which can help you hit your targets');

        $this->assertResponseContains('Target Investment Products');
        $this->assertHtml(['p' => true], "<p>The minimum target amount is N250,00 Interest rate breakdown: 4% p.a for plans with durations that are below 4 years 4.5% p.a for plans whose duration range from 4 to 5 years 5% p.a for contracts with a duration above 5 years. The minimum tenure is 1 year.</p>");
        $this->assertHtml(['p' => true], "<p>The minimum target amount is USD 5,000 Interest rate breakdown: 4% p.a for plans with durations that are below 4 years 4.5% p.a for plans whose duration range from 4 to 5 years 5% p.a for contracts with a duration above 5 years. The minimum tenure is 1 year.</p>");
        $this->assertResponseContains('Dollar Target Investments');
        $this->assertResponseContains('Naira Target investments');
        $this->assertHtml(['p' => true], "<p>Using Doubble literally prevented me from being homeless last year. Using the Doubble target investments plan, I was able to save the amount for my rent and pay on time .</p>");
        $this->assertHtml(['span' => true], "<span>Joshua Atoyebi</span>");
    }

    /**
     * This route exposes the Fixed Product route
     */
    public function testFixedProduct()
    {
        $this->get('/fixed-product');
        $this->assertResponseContains('Doubble Fixed');
        $this->assertResponseContains('Invest for your future in Naira & Dollars.');
        $this->assertHtml(['p' => true], "<p>The fixed investment plan allows you to invest or save a fixed amount of money for a minimum of 30 days and earn up to 5% per annum interest rate at maturity. You can invest in Naira or US dollars and you get all your funds plus interest at maturity.</p>");
        $this->assertHtml(['p' => true], "<p>The Dollar fixed investment product is for everyone who wants to get more returns on their existing Dollar savings. Many times, you get the exact same amount or sometimes even less than your initial deposit in your regular domiciliary account from deductions and charges to your account.
        Our fixed Dollar product takes care of such losses and guarantees that your savings account becomes an investment with no risk whatsoever.
        You can earn up to 2.5% per annum in interest with a minimum tenure of 30 days and a minimum amount of US$500.</p>");
        $this->assertHtml(['p' => true], "<p>The Naira fixed investment product is for everyone who wants to get more returns on their existing Naira savings. Many times, you get the exact same amount or sometimes even less than your initial deposit in your saving account from deductions and charges to your account.
        Our fixed Naira product takes care of such losses and guarantees that your savings account becomes an investment with no added risk.
        You can earn up to 5% interest per annum with a minimum tenure of 30 days and a minimum deposit of N50,000.</p>");
        $this->assertResponseContains('Naira Fixed investments');
        $this->assertResponseContains('Fixed Investment Products');
        $this->assertResponseContains('Dollar Fixed Investments');

        //testimonial ection
        $this->assertHtml(['p' => true], "<p>Before I discovered Doubble, I always thought investing in forex was complicated. I am now able to save, invest and earn interests in dollars. Doubble Fixed Investment has made it super easy for me to grow my money.</p>");
        $this->assertHtml(['span' => true], "<span>Nkoyo Andrews<span>");
    }

    /**
     * This route exposes the Reviews route
     */
    public function setReview()
    {
        $this->get('/review');
        $this->assertHtml(['a' => true], '<a>Sterling Bank Launches Doubble.</a>');
        $this->assertHtml(['a' => true], '<a>Nigeria\'s fastest investment platform.</a>');
        // $this->assertHtml(['a' => true], '<a>Sterling Bank Launches Doubble.</a>');
    }

    public function notExisting()
    {
    }

    // /**
    //  * Test directory traversal protection
    //  *
    //  * @return void
    //  */
    // public function testDirectoryTraversalProtection()
    // {
    //     $this->get('/pages/../Layout/ajax');
    //     $this->assertResponseCode(403);
    //     $this->assertResponseContains('Forbidden');
    // }
}
