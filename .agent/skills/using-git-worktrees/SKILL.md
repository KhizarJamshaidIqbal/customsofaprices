---
name: using-git-worktrees
description: Use when starting new feature development to create isolated workspace without affecting main branch
---

# Using Git Worktrees

## Overview

Git worktrees let you work on multiple branches simultaneously in separate directories. Use them to isolate feature development from your main working directory.

**Core principle:** Isolated workspaces prevent accidental changes to main branch.

## When to Use

- Starting new feature development
- Working on multiple features in parallel
- Testing changes without affecting main branch
- Creating isolated environment for experiments

## Directory Selection Process

### 1. Check Existing Directories
```bash
# Check if project has worktrees directory
ls -d .worktrees worktrees 2>/dev/null
```

### 2. Check CLAUDE.md or README
Look for worktree configuration in project docs.

### 3. Ask User
If no convention found:
"Where should I create worktrees? Options:
1. .worktrees/ (project-local, gitignored)
2. ../project-worktrees/ (sibling directory)
3. Custom location"

## Safety Verification

### For Project-Local Directories
```bash
# Verify .worktrees is in .gitignore
grep -q "^\.worktrees" .gitignore || echo ".worktrees" >> .gitignore
```

### For Global Directory
```bash
# Use ~/.config/superpowers/worktrees
mkdir -p ~/.config/superpowers/worktrees
```

## Creation Steps

### 1. Detect Project Name
```bash
# Get repo name from remote or directory
PROJECT=$(basename $(git rev-parse --show-toplevel))
```

### 2. Create Worktree
```bash
# Create feature branch and worktree
BRANCH_NAME="feature/description"
WORKTREE_PATH=".worktrees/$BRANCH_NAME"

git worktree add -b "$BRANCH_NAME" "$WORKTREE_PATH"
```

### 3. Run Project Setup
```bash
cd "$WORKTREE_PATH"

# Install dependencies
npm install  # or yarn, pnpm, etc.

# Run any setup scripts
npm run setup  # if exists
```

### 4. Verify Clean Baseline
```bash
# Run tests to verify worktree is clean
npm test

# If tests fail BEFORE any changes, stop and investigate
```

### 5. Report Location
```
Worktree created:
- Branch: feature/description
- Path: .worktrees/feature/description
- Status: Tests passing, ready for development
```

## Quick Reference

| Command | Description |
|---------|-------------|
| `git worktree list` | List all worktrees |
| `git worktree add -b <branch> <path>` | Create worktree with new branch |
| `git worktree add <path> <existing-branch>` | Create worktree for existing branch |
| `git worktree remove <path>` | Remove worktree |
| `git worktree prune` | Clean up stale worktree references |

## Common Mistakes

### Skipping ignore verification
- **Problem:** Accidentally commit worktree contents
- **Fix:** Always verify .worktrees is in .gitignore

### Assuming directory location
- **Problem:** Worktree created in wrong place
- **Fix:** Check project conventions first, ask if unclear

### Proceeding with failing tests
- **Problem:** Can't distinguish new bugs from existing
- **Fix:** Verify tests pass BEFORE starting development

### Hardcoding setup commands
- **Problem:** Different projects have different setups
- **Fix:** Read project docs or package.json for setup commands

## Example Workflow

```bash
# 1. Create worktree
git worktree add -b feature/user-auth .worktrees/feature/user-auth

# 2. Move to worktree
cd .worktrees/feature/user-auth

# 3. Install dependencies
npm install

# 4. Verify baseline
npm test
# ✅ All tests pass

# 5. Start development
# ... make changes ...

# 6. When done, use finishing-a-development-branch skill
```

## Red Flags

**Never:**
- Create worktree without verifying .gitignore
- Skip baseline test verification
- Forget to install dependencies
- Leave stale worktrees (use `git worktree prune`)

**Always:**
- Check project conventions first
- Verify tests pass before starting
- Use descriptive branch names
- Clean up worktrees after merging

## Integration

**Pairs with:**
- **brainstorming** - After design, create worktree for implementation
- **writing-plans** - Creates plan in worktree
- **finishing-a-development-branch** - Cleans up worktree after completion
