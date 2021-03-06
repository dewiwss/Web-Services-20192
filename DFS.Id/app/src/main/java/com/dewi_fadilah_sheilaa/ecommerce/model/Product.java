package com.dewi_fadilah_sheilaa.ecommerce.model;

import android.os.Parcel;
import android.os.Parcelable;

import com.google.gson.annotations.SerializedName;

import java.util.ArrayList;

public class Product implements Parcelable {

    @SerializedName("product_id")
    private int id;
    @SerializedName("product_name")
    private String name;
    @SerializedName("product_marketId")
    private int marketId;
    @SerializedName("product_quantity")
    private int quantity;
    @SerializedName("product_price")
    private String price;
    @SerializedName("product_price_after")
    private String price_after;
    @SerializedName("product_categoryId")
    private int categoryId;
    @SerializedName("product_date")
    private String date;
    @SerializedName("product_description")
    private String description;
    @SerializedName("marketName")
    private String sellerName;
    @SerializedName("media")
    private ArrayList<Media> media;



    public Product(int id) {
        this.id = id;
    }

    protected Product(Parcel in) {
        id = in.readInt();
        name = in.readString();
        marketId = in.readInt();
        quantity = in.readInt();
        price = in.readString();
        price_after=in.readString();
        categoryId = in.readInt();
        date = in.readString();
        description = in.readString();
        sellerName=in.readString();
        media=in.readArrayList(Media.class.getClassLoader());
    }

    public static final Creator<Product> CREATOR = new Creator<Product>() {
        @Override
        public Product createFromParcel(Parcel in) {
            return new Product(in);
        }

        @Override
        public Product[] newArray(int size) {
            return new Product[size];
        }
    };

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public int getMarketId() {
        return marketId;
    }

    public void setMarketId(int marketId) {
        this.marketId = marketId;
    }

    public int getQuantity() {
        return quantity;
    }

    public void setQuantity(int quantity) {
        this.quantity = quantity;
    }

    public String getPrice() {
        return price;
    }

    public void setPrice(String price) {
        this.price = price;
    }

    public String getPrice_after() {
        return price_after;
    }

    public void setPrice_after(String price_after) {
        this.price_after = price_after;
    }

    public int getCategoryId() {
        return categoryId;
    }

    public void setCategoryId(int categoryId) {
        this.categoryId = categoryId;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public String getDate() {
        return date;
    }

    public void setDate(String date) {
        this.date = date;
    }

    public String getDescription() {
        return description;
    }

    public void setDescription(String description) {
        this.description = description;
    }

    public String getSellerName() {
        return sellerName;
    }

    public void setSellerName(String sellerName) {
        this.sellerName = sellerName;
    }

    public ArrayList<Media> getMedia() {
        return media;
    }

    public void setMedia(ArrayList<Media> media) {
        this.media = media;
    }

    @Override
    public boolean equals(Object obj) {
        if (obj==null) return false;
        if (!(obj instanceof Product)) return false;
        Product p= (Product) obj;
        return p.getId() == this.getId();
    }

    @Override
    public int describeContents() {
        return 0;
    }

    @Override
    public void writeToParcel(Parcel parcel, int i) {
        parcel.writeInt(id);
        parcel.writeString(name);
        parcel.writeInt(marketId);
        parcel.writeInt(quantity);
        parcel.writeString(price);
        parcel.writeString(price_after);
        parcel.writeInt(categoryId);
        parcel.writeString(date);
        parcel.writeString(description);
        parcel.writeString(sellerName);
        parcel.writeList(media);
    }
}
