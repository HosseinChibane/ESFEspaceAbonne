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
        $__internal_f2459b59619f4d212ce13b7e0f2998f7c742c09413e28fd1772e4bffd7f27e9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2459b59619f4d212ce13b7e0f2998f7c742c09413e28fd1772e4bffd7f27e9c->enter($__internal_f2459b59619f4d212ce13b7e0f2998f7c742c09413e28fd1772e4bffd7f27e9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_71ff7fa4c51c217f9377cf1c82c06fad8dd585ba870a506d93b3f5e457bc1170 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71ff7fa4c51c217f9377cf1c82c06fad8dd585ba870a506d93b3f5e457bc1170->enter($__internal_71ff7fa4c51c217f9377cf1c82c06fad8dd585ba870a506d93b3f5e457bc1170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_f2459b59619f4d212ce13b7e0f2998f7c742c09413e28fd1772e4bffd7f27e9c->leave($__internal_f2459b59619f4d212ce13b7e0f2998f7c742c09413e28fd1772e4bffd7f27e9c_prof);

        
        $__internal_71ff7fa4c51c217f9377cf1c82c06fad8dd585ba870a506d93b3f5e457bc1170->leave($__internal_71ff7fa4c51c217f9377cf1c82c06fad8dd585ba870a506d93b3f5e457bc1170_prof);

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
