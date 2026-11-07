# PHP OOP Challenge – Restaurant Management System

## Challenge Overview

Create a restaurant management system using PHP Utility Classes.

Apply the following concepts:

- Static Properties and Methods
- Constants
- Access Modifiers
- Inheritance (`extends`)
- Encapsulation
- Data Validation
- `self::`, `static::`, and `parent::`

All properties and methods must be static.

## 1. Parent Class: Restaurant

Create a class named `Restaurant`.

### Constants

- Create a public constant named `RESTAURANT_NAME`.
- Create a public constant named `CURRENCY`.
- Create a protected constant named `TAX_RATE`.

### Properties

- Create a public static property named `$address`.
- Create a protected static property named `$openingTime`.
- Create a private static property named `$secretCode`.

### Methods

- Create a public static method named `showRestaurantInfo()` that displays the restaurant name, address, and opening time.
- Create a public static method named `showSecretCode()` that displays the secret code.
- Create a protected static method named `showTaxRate()` that displays the tax rate.
- Create a public static method named `showOpeningTime()` that displays the opening time.

### Encapsulation Requirements

- Make `$secretCode` accessible only inside the `Restaurant` class.
- Create a public static method named `getSecretCode()` to return the secret code.
- Create a public static method named `setSecretCode()` to update the secret code.
- The setter must reject a secret code less than 10 characters.
- Throw an error message when invalid data is provided.

## 2. Child Class: FoodMenu

Create a class named `FoodMenu` that extends `Restaurant`.

### Constants

- Create a public constant named `MENU_VERSION`.

### Properties

- Create a public static property named `$foodName`.
- Create a protected static property named `$foodPrice`.
- Create a private static property named `$preparationCost`.

### Methods

- Create a public static method named `showFoodInfo()` that displays the food name and price.
- Create a public static method named `getPreparationCost()` to return the preparation cost.
- Create a public static method named `setPreparationCost()` to update the preparation cost.
- The setter must reject negative preparation costs.
- Create a public static method named `showFinalPrice()` that calculates and displays the food price after adding tax.
- Use the inherited protected tax rate in the calculation.

### Encapsulation Requirements

- Keep `$preparationCost` private.
- Do not access `$preparationCost` directly outside the `FoodMenu` class.
- Use getter and setter methods to read and update its value.
- Create a public static method named `setFoodPrice()` to update the food price.
- The setter must reject zero or negative prices.
- Keep `$foodPrice` protected so it can be accessed by child classes but not directly from outside the class hierarchy.

## 3. Child Class: Order

Create a class named `Order` that extends `FoodMenu`.

### Constants

- Create a public constant named `MINIMUM_ORDER`.

### Properties

- Create a public static property named `$quantity`.
- Create a protected static property named `$discountRate`.
- Create a private static property named `$deliveryFee`.

### Methods

- Create a public static method named `showOrderInfo()` that displays the food name, quantity, and delivery fee.
- Create a public static method named `getDeliveryFee()` to return the delivery fee.
- Create a public static method named `setDeliveryFee()` to update the delivery fee.
- The setter must reject negative delivery fees.
- Create a public static method named `setQuantity()` to update the order quantity.
- The setter must reject zero or negative quantities.
- Create a public static method named `calculateSubtotal()` that calculates the food price multiplied by the quantity.
- Create a public static method named `calculateDiscount()` that calculates the discount amount.
- Create a public static method named `calculateTotal()` that calculates the final order total after tax, discount, and delivery fees.

### Encapsulation Requirements

- Keep `$deliveryFee` private.
- Do not access `$deliveryFee` directly outside the `Order` class.
- Use getter and setter methods to read and update the delivery fee.
- Keep `$discountRate` protected.
- Validate all values before updating them.
- Display an error message when invalid data is provided.

## 4. Create index.php

Create an `index.php` file to test the system.

### Restaurant Tests

- Display the restaurant information.
- Display the restaurant name and currency using constants.
- Read the secret code using its getter.
- Update the secret code using its setter.
- Try setting an empty secret code and observe the result.

### Food Menu Tests

- Display the menu version.
- Display the food name and price.
- Read the preparation cost using its getter.
- Update the preparation cost using its setter.
- Try setting a negative preparation cost.
- Update the food price using its setter.
- Try setting a zero or negative food price.
- Display the final food price, including tax.

### Order Tests

- Display the minimum order value.
- Display the order information.
- Update the quantity using its setter.
- Try setting a zero or negative quantity.
- Read and update the delivery fee using its getter and setter.
- Try setting a negative delivery fee.
- Calculate and display the subtotal, discount, and final total.

## 5. Inheritance and Static Access

- Use `extends` to inherit methods and properties.
- Use `self::` to access members within the declaring class.
- Use `static::` where late static binding is appropriate.
- Use `parent::` to call inherited methods where appropriate.
- Use static calls only.
- Do not create objects or instances.
- Do not use constructors.
- Do not create non-static properties or methods.

## 6. Final Requirements

- Use meaningful sample values for all data.
- All calculations must produce correct results.
- All private properties must be accessed through appropriate methods.
- All setters must validate incoming values before updating properties.
- Invalid values must not overwrite valid existing values.
- Display clear success or error messages when updating data.
- Keep the code organized across separate class files and an `index.php` file.