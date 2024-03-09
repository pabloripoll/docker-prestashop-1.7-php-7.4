<?php

class PhpEncryption extends PhpEncryptionCore {};
class CustomizationField extends CustomizationFieldCore {};
class SpecificPriceFormatter extends SpecificPriceFormatterCore {};
class ProductAssembler extends ProductAssemblerCore {};
class Group extends GroupCore {};
class CSV extends CSVCore {};
class WarehouseAddress extends WarehouseAddressCore {};
class Address extends AddressCore {};
class SearchEngine extends SearchEngineCore {};
class Store extends StoreCore {};
class CccReducer extends CccReducerCore {};
class JsMinifier extends JsMinifierCore {};
class StylesheetManager extends StylesheetManagerCore {};
class CssMinifier extends CssMinifierCore {};
abstract class AbstractAssetManager extends AbstractAssetManagerCore {};
class JavascriptManager extends JavascriptManagerCore {};
class ShopUrl extends ShopUrlCore {};
class Shop extends ShopCore {};
class ShopGroup extends ShopGroupCore {};
class RangeWeight extends RangeWeightCore {};
class RangePrice extends RangePriceCore {};
class SupplierAddress extends SupplierAddressCore {};
class Gender extends GenderCore {};
class CheckoutPersonalInformationStep extends CheckoutPersonalInformationStepCore {};
class CheckoutAddressesStep extends CheckoutAddressesStepCore {};
abstract class AbstractCheckoutStep extends AbstractCheckoutStepCore {};
class AddressValidator extends AddressValidatorCore {};
class PaymentOptionsFinder extends PaymentOptionsFinderCore {};
class CheckoutDeliveryStep extends CheckoutDeliveryStepCore {};
class CheckoutSession extends CheckoutSessionCore {};
class CheckoutPaymentStep extends CheckoutPaymentStepCore {};
class ConditionsToApproveFinder extends ConditionsToApproveFinderCore {};
class CheckoutProcess extends CheckoutProcessCore {};
class DeliveryOptionsFinder extends DeliveryOptionsFinderCore {};
class CartChecksum extends CartChecksumCore {};
class Pack extends PackCore {};
class Referrer extends ReferrerCore {};
class QuickAccess extends QuickAccessCore {};
class Cookie extends CookieCore {};
class ImageManager extends ImageManagerCore {};
class ProductSale extends ProductSaleCore {};
class Tag extends TagCore {};
class QqUploadedFileForm extends QqUploadedFileFormCore {};
class Customization extends CustomizationCore {};
class Hook extends HookCore {};
class ImageType extends ImageTypeCore {};
class QqUploadedFileXhr extends QqUploadedFileXhrCore {};
class AddressFormat extends AddressFormatCore {};
abstract class AbstractLogger extends AbstractLoggerCore {};
class FileLogger extends FileLoggerCore {};
class PrestaShopDatabaseException extends PrestaShopDatabaseExceptionCore {};
class PrestaShopPaymentException extends PrestaShopPaymentExceptionCore {};
class PrestaShopModuleException extends PrestaShopModuleExceptionCore {};
class PrestaShopException extends PrestaShopExceptionCore {};
class PrestaShopObjectNotFoundException extends PrestaShopObjectNotFoundExceptionCore {};
class AttributeGroup extends AttributeGroupCore {};
class ConfigurationTest extends ConfigurationTestCore {};
class AddressChecksum extends AddressChecksumCore {};
class State extends StateCore {};
class OrderCartRule extends OrderCartRuleCore {};
class OrderSlip extends OrderSlipCore {};
class OrderInvoice extends OrderInvoiceCore {};
class Order extends OrderCore {};
class OrderHistory extends OrderHistoryCore {};
class OrderCarrier extends OrderCarrierCore {};
class OrderDiscount extends OrderDiscountCore {};
class OrderDetail extends OrderDetailCore {};
class OrderState extends OrderStateCore {};
class OrderMessage extends OrderMessageCore {};
class OrderReturnState extends OrderReturnStateCore {};
class OrderReturn extends OrderReturnCore {};
class OrderPayment extends OrderPaymentCore {};
class Meta extends MetaCore {};
class Customer extends CustomerCore {};
class Tab extends TabCore {};
class Mail extends MailCore {};
class WebserviceOutputJSON extends WebserviceOutputJSONCore {};
class WebserviceSpecificManagementSearch extends WebserviceSpecificManagementSearchCore {};
class WebserviceRequest extends WebserviceRequestCore {};
class WebserviceKey extends WebserviceKeyCore {};
class WebserviceOutputBuilder extends WebserviceOutputBuilderCore {};
class WebserviceException extends WebserviceExceptionCore {};
class WebserviceSpecificManagementImages extends WebserviceSpecificManagementImagesCore {};
class WebserviceOutputXML extends WebserviceOutputXMLCore {};
class WebserviceSpecificManagementAttachments extends WebserviceSpecificManagementAttachmentsCore {};
class PhpEncryptionLegacyEngine extends PhpEncryptionLegacyEngineCore {};
class Configuration extends ConfigurationCore {};
class LocalizationPack extends LocalizationPackCore {};
class RequestSql extends RequestSqlCore {};
class Notification extends NotificationCore {};
class Attribute extends AttributeCore {};
class CMSCategory extends CMSCategoryCore {};
class CustomerMessage extends CustomerMessageCore {};
class Connection extends ConnectionCore {};
class Upgrader extends UpgraderCore {};
class Windows extends WindowsCore {};
class CMS extends CMSCore {};
class CMSRole extends CMSRoleCore {};
class ConfigurationKPI extends ConfigurationKPICore {};
class Dispatcher extends DispatcherCore {};
class AttributeGroupLang extends AttributeGroupLangCore {};
class RiskLang extends RiskLangCore {};
class ConfigurationLang extends ConfigurationLangCore {};
class FeatureLang extends FeatureLangCore {};
class CarrierLang extends CarrierLangCore {};
class TabLang extends TabLangCore {};
class GenderLang extends GenderLangCore {};
class ContactLang extends ContactLangCore {};
class OrderReturnStateLang extends OrderReturnStateLangCore {};
class AttributeLang extends AttributeLangCore {};
class ProfileLang extends ProfileLangCore {};
class FeatureValueLang extends FeatureValueLangCore {};
class CmsCategoryLang extends CmsCategoryLangCore {};
class QuickAccessLang extends QuickAccessLangCore {};
class GroupLang extends GroupLangCore {};
class MetaLang extends MetaLangCore {};
class CategoryLang extends CategoryLangCore {};
class DataLang extends DataLangCore {};
class StockMvtReasonLang extends StockMvtReasonLangCore {};
class SupplyOrderStateLang extends SupplyOrderStateLangCore {};
class OrderMessageLang extends OrderMessageLangCore {};
class ThemeLang extends ThemeLangCore {};
class OrderStateLang extends OrderStateLangCore {};
class DateRange extends DateRangeCore {};
class PrestaShopBackup extends PrestaShopBackupCore {};
class TaxRule extends TaxRuleCore {};
class TaxRulesGroup extends TaxRulesGroupCore {};
class Tax extends TaxCore {};
class TaxManagerFactory extends TaxManagerFactoryCore {};
abstract class TaxManagerModule extends TaxManagerModuleCore {};
class TaxConfiguration extends TaxConfigurationCore {};
class TaxCalculator extends TaxCalculatorCore {};
class TaxRulesTaxManager extends TaxRulesTaxManagerCore {};
class ProductPresenterFactory extends ProductPresenterFactoryCore {};
class Cart extends CartCore {};
class Zone extends ZoneCore {};
class CustomerAddressPersister extends CustomerAddressPersisterCore {};
class CustomerPersister extends CustomerPersisterCore {};
class CustomerFormatter extends CustomerFormatterCore {};
class CustomerLoginFormatter extends CustomerLoginFormatterCore {};
class CustomerLoginForm extends CustomerLoginFormCore {};
class CustomerForm extends CustomerFormCore {};
class FormField extends FormFieldCore {};
abstract class AbstractForm extends AbstractFormCore {};
class CustomerAddressFormatter extends CustomerAddressFormatterCore {};
class CustomerAddressForm extends CustomerAddressFormCore {};
class Country extends CountryCore {};
class Tools extends ToolsCore {};
class FileUploader extends FileUploaderCore {};
class SpecificPrice extends SpecificPriceCore {};
class CacheMemcached extends CacheMemcachedCore {};
abstract class Cache extends CacheCore {};
class CacheXcache extends CacheXcacheCore {};
class CacheMemcache extends CacheMemcacheCore {};
class CacheApc extends CacheApcCore {};
class DbPDO extends DbPDOCore {};
class DbMySQLi extends DbMySQLiCore {};
abstract class Db extends DbCore {};
class DbQuery extends DbQueryCore {};
class Uploader extends UploaderCore {};
class TreeToolbarLink extends TreeToolbarLinkCore {};
class Tree extends TreeCore {};
class TreeToolbarSearchCategories extends TreeToolbarSearchCategoriesCore {};
class TreeToolbarSearch extends TreeToolbarSearchCore {};
abstract class TreeToolbarButton extends TreeToolbarButtonCore {};
class TreeToolbar extends TreeToolbarCore {};
class PhpEncryptionEngine extends PhpEncryptionEngineCore {};
class Product extends ProductCore {};
class FeatureValue extends FeatureValueCore {};
class Language extends LanguageCore {};
class Translate extends TranslateCore {};
class Combination extends CombinationCore {};
class Supplier extends SupplierCore {};
abstract class ObjectModel extends ObjectModelCore {};
class Feature extends FeatureCore {};
class HelperOptions extends HelperOptionsCore {};
class HelperTreeCategories extends HelperTreeCategoriesCore {};
class Helper extends HelperCore {};
class HelperTreeShops extends HelperTreeShopsCore {};
class HelperForm extends HelperFormCore {};
class HelperList extends HelperListCore {};
class HelperKpi extends HelperKpiCore {};
class HelperImageUploader extends HelperImageUploaderCore {};
class HelperView extends HelperViewCore {};
class HelperKpiRow extends HelperKpiRowCore {};
class HelperShop extends HelperShopCore {};
class HelperCalendar extends HelperCalendarCore {};
class HelperUploader extends HelperUploaderCore {};
class Page extends PageCore {};
class ValidateConstraintTranslator extends ValidateConstraintTranslatorCore {};
class Link extends LinkCore {};
class ProductDownload extends ProductDownloadCore {};
class Chart extends ChartCore {};
class Search extends SearchCore {};
class Manufacturer extends ManufacturerCore {};
class ConnectionsSource extends ConnectionsSourceCore {};
class ProductSupplier extends ProductSupplierCore {};
class Employee extends EmployeeCore {};
class ModuleFrontController extends ModuleFrontControllerCore {};
class FrontController extends FrontControllerCore {};
abstract class ProductPresentingFrontController extends ProductPresentingFrontControllerCore {};
class AdminController extends AdminControllerCore {};
abstract class ModuleAdminController extends ModuleAdminControllerCore {};
abstract class ProductListingFrontController extends ProductListingFrontControllerCore {};
abstract class Controller extends ControllerCore {};
class TranslatedConfiguration extends TranslatedConfigurationCore {};
class GroupReduction extends GroupReductionCore {};
class SpecificPriceRule extends SpecificPriceRuleCore {};
class Delivery extends DeliveryCore {};
class Category extends CategoryCore {};
class CartRule extends CartRuleCore {};
class Guest extends GuestCore {};
class CustomerThread extends CustomerThreadCore {};
class PrestaShopCollection extends PrestaShopCollectionCore {};
class Profile extends ProfileCore {};
class LinkProxy extends LinkProxyCore {};
class PrestaShopLogger extends PrestaShopLoggerCore {};
class Curve extends CurveCore {};
class Context extends ContextCore {};
abstract class Module extends ModuleCore {};
abstract class ModuleGraph extends ModuleGraphCore {};
abstract class ModuleGraphEngine extends ModuleGraphEngineCore {};
abstract class CarrierModule extends CarrierModuleCore {};
abstract class ModuleGrid extends ModuleGridCore {};
abstract class ModuleGridEngine extends ModuleGridEngineCore {};
class Access extends AccessCore {};
class ManufacturerAddress extends ManufacturerAddressCore {};
class EmployeeSession extends EmployeeSessionCore {};
class Validate extends ValidateCore {};
class CustomerSession extends CustomerSessionCore {};
class PDFGenerator extends PDFGeneratorCore {};
class HTMLTemplateInvoice extends HTMLTemplateInvoiceCore {};
class PDF extends PDFCore {};
class HTMLTemplateDeliverySlip extends HTMLTemplateDeliverySlipCore {};
class HTMLTemplateSupplyOrderForm extends HTMLTemplateSupplyOrderFormCore {};
class HTMLTemplateOrderSlip extends HTMLTemplateOrderSlipCore {};
class HTMLTemplateOrderReturn extends HTMLTemplateOrderReturnCore {};
abstract class HTMLTemplate extends HTMLTemplateCore {};
class Media extends MediaCore {};
class Contact extends ContactCore {};
class Currency extends CurrencyCore {};
class TemplateFinder extends TemplateFinderCore {};
class SmartyCustomTemplate extends SmartyCustomTemplateCore {};
class SmartyResourceParent extends SmartyResourceParentCore {};
class SmartyCustom extends SmartyCustomCore {};
class SmartyResourceModule extends SmartyResourceModuleCore {};
class SmartyDevTemplate extends SmartyDevTemplateCore {};
class Alias extends AliasCore {};
abstract class PaymentModule extends PaymentModuleCore {};
class Message extends MessageCore {};
class CustomerAddress extends CustomerAddressCore {};
class Carrier extends CarrierCore {};
class Attachment extends AttachmentCore {};
class Image extends ImageCore {};
class Risk extends RiskCore {};
class SupplyOrder extends SupplyOrderCore {};
class SupplyOrderReceiptHistory extends SupplyOrderReceiptHistoryCore {};
class StockMvtWS extends StockMvtWSCore {};
class WarehouseProductLocation extends WarehouseProductLocationCore {};
class StockManagerFactory extends StockManagerFactoryCore {};
class SupplyOrderState extends SupplyOrderStateCore {};
class StockManager extends StockManagerCore {};
class Warehouse extends WarehouseCore {};
class StockAvailable extends StockAvailableCore {};
class Stock extends StockCore {};
abstract class StockManagerModule extends StockManagerModuleCore {};
class SupplyOrderHistory extends SupplyOrderHistoryCore {};
class SupplyOrderDetail extends SupplyOrderDetailCore {};
class StockMvtReason extends StockMvtReasonCore {};
class StockMvt extends StockMvtCore {};