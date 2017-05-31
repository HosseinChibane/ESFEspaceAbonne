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
        $__internal_e323e38f9326c51df086ecea456b20b2bf4fcdc7d10cf4ba529478f37ae68c5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e323e38f9326c51df086ecea456b20b2bf4fcdc7d10cf4ba529478f37ae68c5a->enter($__internal_e323e38f9326c51df086ecea456b20b2bf4fcdc7d10cf4ba529478f37ae68c5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_eee08b88fa759faed7b88fdd6093de8a99dd6317bdde3a74bd0345e2631ffdc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eee08b88fa759faed7b88fdd6093de8a99dd6317bdde3a74bd0345e2631ffdc2->enter($__internal_eee08b88fa759faed7b88fdd6093de8a99dd6317bdde3a74bd0345e2631ffdc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_e323e38f9326c51df086ecea456b20b2bf4fcdc7d10cf4ba529478f37ae68c5a->leave($__internal_e323e38f9326c51df086ecea456b20b2bf4fcdc7d10cf4ba529478f37ae68c5a_prof);

        
        $__internal_eee08b88fa759faed7b88fdd6093de8a99dd6317bdde3a74bd0345e2631ffdc2->leave($__internal_eee08b88fa759faed7b88fdd6093de8a99dd6317bdde3a74bd0345e2631ffdc2_prof);

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
