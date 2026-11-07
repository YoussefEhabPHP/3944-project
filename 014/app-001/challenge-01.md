# OOP Challenge: Company Branches Management System

## Create the Store Class

Create a PHP class called `Store` inside the `App\Company` namespace.

### 1. Define the Class Properties

Create the following **non-static properties**:

- `name`
- `city`
- `stock`
- `sales`
- `refund`

Create the following **static properties** to store the company's overall statistics:

- `totalBranches`
- `totalStock`
- `totalSales`
- `totalRefund`

**Hint:** Each object should have its own store information, while static properties should hold shared information across all branches.

### 2. Define a Class Constant

Create a constant called `PRICE` with a value of `100`.

This represents the price of one product in every branch.

---

## 3. Create the Required Methods

### Challenge 1: Create a Branch

Create a method called `create()` that accepts:

- Store name
- City
- Initial stock

Requirements:

- Assign the received values to the current object's properties.
- Increase the company's total branches.
- Increase the company's total stock.
- Display a success message containing the store name and city.

### Challenge 2: Complete a Sale

Create a method called `sales()` that accepts the quantity of products sold.

Requirements:

- Calculate the total sale amount using the `PRICE` constant.
- Increase the current branch's sales.
- Decrease the current branch's stock.
- Increase the company's total sales.
- Decrease the company's total stock.
- Display the sale amount and branch name.

### Challenge 3: Process a Refund

Create a method called `refund()` that accepts the quantity of returned products.

Requirements:

- Calculate the refund amount using the `PRICE` constant.
- Decrease the current branch's sales.
- Increase the current branch's stock.
- Increase the current branch's refund amount.
- Decrease the company's total sales.
- Increase the company's total stock.
- Increase the company's total refund amount.
- Display the refund amount and branch name.

### Challenge 4: Display Branch Report

Create a non-static method called `report()`.

Display the following information about the current branch:

- Store Name
- City
- Current Stock
- Total Sales
- Total Refund

**Hint:** This report should display information belonging to the current object only.

### Challenge 5: Display Company Report

Create a static method called `companyReport()`.

Display the following information about the entire company:

- Total Branches
- Total Stock
- Total Sales
- Total Refund

**Hint:** Use static properties to retrieve the shared company statistics.

---

## 4. Create the Store Objects

Create the following three store objects:

| Branch            | City       | Initial Stock |
| ----------------- | ---------- | ------------: |
| Cairo Branch      | Cairo      |           100 |
| Alexandria Branch | Alexandria |           150 |
| Giza Branch       | Giza       |           200 |

Call the `create()` method for each object.

---

## 5. Perform Store Operations

Perform the following operations:

### Cairo Branch

- Sell 20 products.
- Sell 10 more products.
- Refund 5 products.

### Alexandria Branch

- Sell 30 products.
- Refund 10 products.

### Giza Branch

- Sell 50 products.
- Sell 25 more products.
- Refund 15 products.

---

## 6. Display the Reports

- Display the report of Cairo Branch.
- Display the report of Alexandria Branch.
- Display the report of Giza Branch.
- Display the overall company report.

---

## 7. Extra Challenge: Shared Statistics

Without creating any additional objects:

1. Call `companyReport()` directly using the class name.
2. Try accessing the company's static properties using the class name.
3. Try accessing a branch's non-static properties using the class name.
4. Try accessing a branch's non-static methods using the class name.
5. Observe the difference between accessing static and non-static members.

**Think About It:**

- Why does each branch have its own `stock` and `sales`?
- Why should `totalStock` and `totalSales` be static?
- If you create another branch, should the company's total branches increase?
- If one branch makes a sale, should the other branches' individual sales change?
- Can you access a static property without creating an object?
- Can a static method directly access a non-static property using `$this`?
