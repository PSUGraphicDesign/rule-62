<? class MerchItemPage extends Page {
  public function product_image () {
    if ( $this->hasImages() ) {
      return $this->images()->first();
    } else {
      return false;
    }
  }
}
