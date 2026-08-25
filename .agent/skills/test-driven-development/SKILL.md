---
name: test-driven-development
description: Use when writing new code, fixing bugs, or adding features - write failing test first, then minimal code to pass, then refactor
---

# Test-Driven Development (TDD)

## Overview
Write the test first. Then write the minimum code to pass. Then refactor.

**Core principle:** RED → GREEN → REFACTOR. Every time. No exceptions.

## The Iron Law
```
NEVER WRITE PRODUCTION CODE WITHOUT A FAILING TEST FIRST
```

If you haven't seen the test fail, you don't know it tests anything.

## When to Use
Use for ALL code changes:
- New features
- Bug fixes
- Refactoring
- API development
- Integration code

## Red-Green-Refactor

### RED - Write Failing Test

**Write a test that:**
- Tests ONE specific behavior
- Describes what the code should do
- Uses clear, descriptive names
- Fails for the right reason

```typescript
// Example: Adding a user validation function
test('validates email has @ symbol', () => {
  const result = validateEmail('invalid-email');
  expect(result.valid).toBe(false);
  expect(result.error).toBe('Email must contain @');
});
```

### Verify RED - Watch It Fail

**Run the test. It MUST fail:**
- If no function exists: Expected error (ReferenceError, etc.)
- If function exists but wrong: Behavior mismatch

**If test passes immediately:** Test is testing something else. Rewrite.

### GREEN - Minimal Code

**Write the MINIMUM code to pass:**
- Only what's needed to pass this one test
- No extra features
- No optimization
- "Fake it till you make it" is okay

```typescript
// Minimal implementation
function validateEmail(email: string) {
  if (!email.includes('@')) {
    return { valid: false, error: 'Email must contain @' };
  }
  return { valid: true };
}
```

### Verify GREEN - Watch It Pass

**Run the test. It MUST pass:**
- If still fails: Fix the implementation, not the test
- Don't change the test to match wrong behavior

### REFACTOR - Clean Up

**Now improve the code:**
- Remove duplication
- Improve names
- Simplify logic
- Tests MUST still pass after refactoring

### Repeat

For each new behavior:
1. Write failing test
2. Make it pass
3. Refactor
4. Repeat

## Good Tests

**Test ONE thing:**
```typescript
// ✅ Good - tests one thing
test('rejects email without domain', () => {
  expect(validateEmail('user@').valid).toBe(false);
});

// ❌ Bad - tests multiple things
test('validates email', () => {
  expect(validateEmail('user@').valid).toBe(false);
  expect(validateEmail('user@domain.com').valid).toBe(true);
  expect(validateEmail('@domain').valid).toBe(false);
});
```

**Descriptive names:**
```typescript
// ✅ Good
test('returns error when password shorter than 8 characters')

// ❌ Bad
test('password validation')
```

## Why Order Matters

**Test first ensures:**
- You understand the requirement
- Code is testable by design
- You only write needed code
- Refactoring is safe

**Code first causes:**
- Hard-to-test code
- Over-engineering
- Tests that pass trivially
- Fear of refactoring

## Common Rationalizations

| Excuse | Reality |
|--------|---------|
| "I know what to write, test is waste of time" | Test proves you're right. Often you're not. |
| "Simple code doesn't need tests" | Simple code becomes complex. Tests catch regressions. |
| "I'll write tests after" | You won't. Or they'll be weak. |
| "Too slow" | Debugging without tests is 10x slower. |
| "Just this once" | Every exception erodes the practice. |

## Red Flags - STOP and Start Over

If you're:
- Writing production code without a failing test
- Changing test to match wrong behavior
- Skipping the "verify fail" step
- Writing multiple tests before any code
- Refactoring while tests are red
- Thinking "just this once"

**STOP. Delete the code. Write the test first.**

## Example: Bug Fix

```typescript
// 1. BUG REPORT: Prices display wrong for discounted items

// 2. RED - Write failing test that reproduces bug
test('calculates discounted price correctly', () => {
  const product = { price: 100, discount: 20 };
  const result = calculateFinalPrice(product);
  expect(result).toBe(80); // 100 - 20% = 80
});

// 3. RUN TEST - Verify it fails with current behavior
// Output: Expected 80, got 100

// 4. GREEN - Fix the bug minimally
function calculateFinalPrice(product) {
  return product.price * (1 - product.discount / 100);
}

// 5. RUN TEST - Verify it passes

// 6. REFACTOR if needed

// 7. COMMIT
```

## Verification Checklist

Before committing:
- [ ] All tests pass
- [ ] Each feature has tests
- [ ] Tests fail when code is wrong (regression test)
- [ ] Tests are readable and maintainable
- [ ] No test pollution (tests independent)

## Final Rule

**If there's no failing test, there's no code to write.**
