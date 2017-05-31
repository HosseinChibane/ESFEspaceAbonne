<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_9d6d347575b2b64a7405a1c4518e6f518f3e3d21b589b065f2eb8fe9e2848b55 extends Twig_Template
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
        $__internal_e7e1766105a37cfb00c0f5dcc52602d111dbc9816057499c5e1bf4137562f80a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7e1766105a37cfb00c0f5dcc52602d111dbc9816057499c5e1bf4137562f80a->enter($__internal_e7e1766105a37cfb00c0f5dcc52602d111dbc9816057499c5e1bf4137562f80a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_c5179d51018104ef283516b0f84030fa58d9d40fb1a37e424915614a7bb64700 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5179d51018104ef283516b0f84030fa58d9d40fb1a37e424915614a7bb64700->enter($__internal_c5179d51018104ef283516b0f84030fa58d9d40fb1a37e424915614a7bb64700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_e7e1766105a37cfb00c0f5dcc52602d111dbc9816057499c5e1bf4137562f80a->leave($__internal_e7e1766105a37cfb00c0f5dcc52602d111dbc9816057499c5e1bf4137562f80a_prof);

        
        $__internal_c5179d51018104ef283516b0f84030fa58d9d40fb1a37e424915614a7bb64700->leave($__internal_c5179d51018104ef283516b0f84030fa58d9d40fb1a37e424915614a7bb64700_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
