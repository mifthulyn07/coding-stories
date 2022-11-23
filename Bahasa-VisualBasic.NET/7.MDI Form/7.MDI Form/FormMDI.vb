Public Class Form1

    Private Sub Form2ToolStripMenuItem1_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Form2ToolStripMenuItem1.Click
        Form2.MdiParent = Me
        Form2.Show()
        Form2.Focus()
    End Sub

    Private Sub Form3ToolStripMenuItem_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Form3ToolStripMenuItem.Click
        Form3.MdiParent = Me
        Form3.Show()
        Form3.Focus()
    End Sub
End Class
