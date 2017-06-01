<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_abbb05994de3b47e78286e06338d08a20b0ed6b44267d88205319df291cd9e46 extends Twig_Template
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
        $__internal_066f9effaf65467d8067cf41b47e0fa22fc51eef828a638818fa87cd8565617c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_066f9effaf65467d8067cf41b47e0fa22fc51eef828a638818fa87cd8565617c->enter($__internal_066f9effaf65467d8067cf41b47e0fa22fc51eef828a638818fa87cd8565617c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_5261c1ea6e03c6b57086b218a0916dbc6384263ad706b9e8c7012ea77cec9b4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5261c1ea6e03c6b57086b218a0916dbc6384263ad706b9e8c7012ea77cec9b4b->enter($__internal_5261c1ea6e03c6b57086b218a0916dbc6384263ad706b9e8c7012ea77cec9b4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_066f9effaf65467d8067cf41b47e0fa22fc51eef828a638818fa87cd8565617c->leave($__internal_066f9effaf65467d8067cf41b47e0fa22fc51eef828a638818fa87cd8565617c_prof);

        
        $__internal_5261c1ea6e03c6b57086b218a0916dbc6384263ad706b9e8c7012ea77cec9b4b->leave($__internal_5261c1ea6e03c6b57086b218a0916dbc6384263ad706b9e8c7012ea77cec9b4b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
