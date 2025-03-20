<?php
namespace GymBeam\CaseStudy\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;
use Magento\Framework\App\Config\ScopeConfigInterface;

class GreetingViewModel implements ArgumentInterface
{
    
    private const XML_PATH_GREETING_TEXT = 'gymbeam_casestudy/configuration/greeting_text';
    
    /**
     * @var ScopeConfigInterface
     */
    protected $scopeConfig;

    /**
     * @param ScopeConfigInterface $scopeConfig
     */
    public function __construct(ScopeConfigInterface $scopeConfig)
    {
        $this->scopeConfig = $scopeConfig;
    }
    
    /**
     * Function which will return greeting text from configuration
     */
    public function getGreetingText(): mixed
    {
        return $this->scopeConfig->getValue(
            self::XML_PATH_GREETING_TEXT,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }
}
