<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_a40eaf787dbd2657d2b523afc06e0e54eea9b03e8fa8f7dc2787255e559ca4a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bd684ac15e6cad08c6ca18384d7299557fe36178e2d14fc23d23bdabe29c77db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd684ac15e6cad08c6ca18384d7299557fe36178e2d14fc23d23bdabe29c77db->enter($__internal_bd684ac15e6cad08c6ca18384d7299557fe36178e2d14fc23d23bdabe29c77db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_47d6baa712c0bab6c39efebc6abedc9bb8fee71d3272d8ec2d1f12b0bfa6a43e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47d6baa712c0bab6c39efebc6abedc9bb8fee71d3272d8ec2d1f12b0bfa6a43e->enter($__internal_47d6baa712c0bab6c39efebc6abedc9bb8fee71d3272d8ec2d1f12b0bfa6a43e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_bd684ac15e6cad08c6ca18384d7299557fe36178e2d14fc23d23bdabe29c77db->leave($__internal_bd684ac15e6cad08c6ca18384d7299557fe36178e2d14fc23d23bdabe29c77db_prof);

        
        $__internal_47d6baa712c0bab6c39efebc6abedc9bb8fee71d3272d8ec2d1f12b0bfa6a43e->leave($__internal_47d6baa712c0bab6c39efebc6abedc9bb8fee71d3272d8ec2d1f12b0bfa6a43e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
