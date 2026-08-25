---
name: codebase-cleanup
description: Use when cleaning up unused components, dependencies, and non-functional files from a codebase. Guides systematic identification and removal of dead code and unused packages.
---

# Codebase Cleanup

## Overview

A systematic workflow for identifying and removing unused components, dependencies, and non-functional files from a codebase. Follow these prompts in sequence for a thorough cleanup.

**Core principle:** Identify before removing. Mark unused items clearly, verify safety, then delete systematically.

## When to Use

- Codebase has accumulated unused components
- Dependencies have grown and need pruning
- Project has scattered txt/md/sh files that are no longer needed
- Before major releases or refactoring
- Technical debt cleanup sprints

## The Process

### Phase 1: Unused Components Cleanup

#### Step 1.1: Identify Components
```
Create a txt file and list all the components in the components directory. 
Include all files that import each component. 
Mark a component as N/A if it is not imported anywhere.
```

Wait for completion...

#### Step 1.2: Review the List
```
Display the full txt file here in chat
```

This displays all components and separates the ones not being used.

#### Step 1.3: Delete Unused Components
Copy the list of unused components (marked N/A), then:
```
Completely delete these components from the codebase: <paste list here>
```

---

### Phase 2: Unused Dependencies Cleanup

#### Step 2.1: Identify Dependencies
```
Create a txt file and list all project dependencies in it. 
Include list all files that depend on each dependency on the list. 
If a dependency is not being used anywhere, mark it with N/A.
```

Wait for completion...

#### Step 2.2: Evaluate Safe Deletions
```
Of all <number> unused dependencies, which ones can be removed safely 
without potentially breaking anything?
```

#### Step 2.3: Remove Safe Dependencies
```
Completely delete the unused dependencies that are safe to delete from the codebase
```

---

### Phase 3: Non-Functional Files Cleanup

#### Step 3.1: Remove Scattered Files
```
Completely delete all sh scripts, txt files, md files (other than README), 
and any other non-functional text files from the codebase
```

#### Step 3.2: Fix Any Errors
Address any errors that pop up after cleanup.

---

## Safety Checklist

Before running cleanup:
- [ ] All changes committed to version control
- [ ] Working branch created for cleanup
- [ ] Tests passing before cleanup

After each phase:
- [ ] Build still works
- [ ] Tests still pass
- [ ] Application runs correctly

---

## Red Flags

| Problem | Action |
|---------|--------|
| Component marked N/A but used dynamically | Check for dynamic imports before deleting |
| Dependency marked unused but in config | Check build configs, not just imports |
| README files accidentally marked | Exclude README.md from deletion |
| Build scripts marked as non-functional | Keep essential .sh build/deploy scripts |

## Common Mistakes

| Mistake | Fix |
|---------|-----|
| Deleting without backup | Always commit before cleanup |
| Removing all .sh files | Keep build/deploy scripts |
| Ignoring dynamic imports | Search for string-based imports |
| Bulk deleting dependencies | Evaluate safety one by one |
| Skipping verification | Run build/tests after each phase |

## Integration

**Pairs with:**
- `verification-before-completion` - Verify after each cleanup phase
- `systematic-debugging` - If cleanup causes issues

## The Bottom Line

**Identify → Verify → Delete → Test**

Never delete blindly. Always verify the build and tests after each cleanup phase.
